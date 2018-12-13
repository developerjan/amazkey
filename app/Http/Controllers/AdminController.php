<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMeta;
use App\Models\SiteBlock;
use App\Helpers\Guzzle;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    public function index() {
        $metaData = UserMeta::select(['meta_value'])
                            ->where(['user_id' => Auth::id(), 'meta_key' => 'site_data'])
                            ->first();
//        $data = $metaData ? json_decode($metaData->meta_value, true) : [];

        return view('theme.index'/*, ['siteData' => $data]*/);
    }

    public function blockManager (Request $request) {
        $userSiteMetaData = $this->getUserMetaData();
        $disabledBlocks = UserMeta::where(['user_id' => Auth::id(), 'meta_key' => 'site_disabled_blocks'])->first();
        $wpPagesData = Guzzle::get('/pages', $userSiteMetaData['site_url']);//todo change to $userSiteMetaData['site_url']
        $data = $this->fetchPageData($wpPagesData);

        if ($disabledBlocks) {
            foreach (json_decode($disabledBlocks->meta_value, true) as $item) {
                $data[$item['wp_name']] = [
                    'id' => $item['id'],
                    'wp_name' => $item['wp_name'],
                    'name' => $item['name'],
                    'icon' => $item['icon'],
                    'disable' => $item['disable'],
                ];
            }
        }

        return view('dashboard.blocks_management', ['pages' => $data]);
    }

    public function editBlockStatus (Request $request) {
        $page = [];
        $userSiteMetaData = $this->getUserMetaData();
        $wpData['status'] =  $request->active ? 'publish' : 'private';
        $wpDisabledPage = Guzzle::post('/pages/' . $request->id, $wpData,$userSiteMetaData['site_url']);//todo change to $userSiteMetaData['site_url']
        $pagesInfo = SiteBlock::where(['wp_name' => $wpDisabledPage->slug])->first();
        $data = UserMeta::where([
            'user_id' => Auth::id(),
            'meta_key' => 'site_disabled_blocks',
        ])->first();

        if ($data && !empty(json_encode($data->meta_value))) {
            $metaValue = json_decode($data->meta_value, true);

            if ($request->active) {
                unset($metaValue[$wpDisabledPage->slug]);
            } else {
                $metaValue[$wpDisabledPage->slug] = [
                    'id' => $wpDisabledPage->id,
                    'wp_name' => $wpDisabledPage->slug,
                    'name' => $pagesInfo->name,
                    'icon' => $pagesInfo->icon,
                    'disable' => true
                ];
            }

            UserMeta::where([
                'user_id' => Auth::id(),
                'meta_key' => 'site_disabled_blocks'
            ])
            ->update(['meta_value' => json_encode($metaValue)]);
        } else {
            $page[$wpDisabledPage->slug] = [
                'id' => $wpDisabledPage->id,
                'wp_name' => $wpDisabledPage->slug,
                'name' => $pagesInfo->name,
                'icon' => $pagesInfo->icon,
                'disable' => true
            ];

            UserMeta::create([
                'user_id' => Auth::id(),
                'meta_key' => 'site_disabled_blocks',
                "meta_value" => json_encode($page)
            ]);
        }

        return $this->json(true, [
            'message' => 'Block Status changed.',
        ]);
    }

    public function editBlockContent (Request $request) {
        echo 'Edit Block';
//        $userSiteMetaData = $this->getUserMetaData();
//        $wpPagesData = Guzzle::get('/pages', 'anvyss');//todo change to $userSiteMetaData['site_url']
//        $pagesNames = [];
//        dd($wpPagesData);
//        return view('dashboard.blocks_edit');
    }

    private function getUserMetaData () {
        $userSiteData = UserMeta::select('meta_value')->where(['user_id' => Auth::id(), 'meta_key' => 'site_data'])->first();
        $userDataArray = $userSiteData ? json_decode($userSiteData->meta_value, true) : []; //todo remove checking
        return $userDataArray;
    }

    public function fetchPageData ($data) {
        $pagesData =[];
        foreach ($data as $site => $key) {
            $pagesData[$key->slug] = [
                'id' => $key->id,
                'wp_name' => $key->slug,
                'disable' => false
            ];
        }

        $pagesIcons = SiteBlock::whereIn('wp_name', array_keys($pagesData))->get(['icon', 'wp_name', 'name'])->toArray();

        foreach ($pagesIcons as $icon) {
            $pagesData[$icon['wp_name']]['icon'] = $icon['icon'];
            $pagesData[$icon['wp_name']]['name'] = $icon['name'];
        }

        return $pagesData;
    }
}
