<?php

namespace App\Http\Controllers;

use App\Models\SiteType;
use App\Models\User;
use Illuminate\Support\Facades\Config;

class PagesController extends Controller
{
	public function index() {
		return view('user.login')->with([
			'site_types' => SiteType::all(),
			'color_palettes' => Config::get('constants.color_palettes'),
			'typography' => Config::get('constants.typography')
		]);
    }

    public function resetPassword($userId, $key) {
        $user = User::where([['id', $userId], ['user_activation_key', $key]])->first();
        if(!$user) {
            session()->flash('message', 'Invalid token. Please try sending request again.');
        } else {
            session()->put('userId', $user->ID);
        }

        return view('user.reset_password')->with(['user' => $user]);
    }

}
