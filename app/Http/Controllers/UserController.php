<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswordMail;
use App\Models\SiteType;
use App\Models\UserMeta;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Helpers\Guzzle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\ResetPassword;

class UserController extends Controller
{

    private $api_key = "tarasovdennis-test";
    private $secret_key = "dc77a5caa0916c57dede9d0108768a72ff1a137e";

	public function login(LoginRequest $request) {
		$data = $request->all();
		$data['username'] = $data['email'];
		$response = Guzzle::login($data);
		$user = User::whereUserEmail($response->user_email)->first();
		Auth::login($user, true);
		return response()->json([
			'success' => true
		]);
    }

	public function logout() {
		Auth::logout();
		return redirect('/');
    }

    public function forgotPassword(ForgotPasswordRequest $request) {
	    $result['success'] = false;

        $message = 'Request sent successfully. Please check your email for password reset link.';
        $user = User::whereUserEmail($request->input('email'))->first();
        if($user) {
            $user->user_pass = '';
            $user->user_activation_key = uniqid();
            if($user->save()) {
                $passwordResetLink = url('/resetPassword/'.$user->ID.'/'.$user->user_activation_key);
                Mail::to($user->user_email)->send(new ForgotPasswordMail($passwordResetLink, $user));
                if(Mail::failures()) {
                    $result['message'] = 'Error sending request. Please try again later.';
                } else {
                    $result['success'] = true;
                    $result['message'] = $message;
                }
            } else {
                $result['message'] = 'Error sending request. Please try again.';
            }
        } else {
            $result['success'] = true;
            $result['message'] = $message;
        }

        return response()->json($result);
    }

    public function resetPassword(ResetPassword $request) {
	    $userId = session()->get('userId');
	    $response = Guzzle::put('/users/password/'.$userId, [
	        'password' => $request->input('password')
        ]);

	    if($response->success) {
            return $this->json(!!$response->success, 'Password changed successfully');
        } else {
	        return $this->json($response->success, 'Error resetting password');
        }
    }

	public function loadSkins($site_type) {
		$skins = SiteType::whereTypeName($site_type)->first()->skins;
		$view = View::make('elements/user_flow/forms/skins', ['skins' => $skins]);
		$skins = $view->render();
		return $this->json(true, ['skins' => (string) $skins]);
    }

    public function name() {
//	    $request->validate([
//	        'keyword' => 'required|string'
//        ]);
//	    $keyword = $request->input('keyword');

        $client = new Client(['auth' => ['tarasovdennis-test', 'dc77a5caa0916c57dede9d0108768a72ff1a137e']]);
        $response = $client->post('https://api.dev.name.com/v4/domains:search', [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'body' => json_encode(["keyword" => "test"])
        ]);

        var_dump($response->getBody()->getContents());
        $result = json_decode($response->getBody()->getContents(), true);
        var_dump($result);

        return view('user.name', ['result' => $result]);
    }

	public function createSite(Request $request) {
		$data = $this->validate($request, [
			'site_type' => 'required',
			'site_name' => 'required|alpha_num',
			'site_skin' => 'required',
			'site_color' => 'required',
			'site_typography' => 'required',
			'site_layout' => 'required',
			'first_name' => 'required|alpha',
			'last_name' => 'required|alpha',
			'email' => 'required|email|unique:wp_users,user_email',
			'password' => 'required|min:8',
			'site_url' => 'required'
		]);

        $data['username'] = explode('@', $data['email'])[0];
		$user = Guzzle::post('/users', $data);


        if(!$user) {
            return $this->json(false, 'Error registering user. Please try again');
        }

        $site_data = [
			'email' => $data['email'],
			'site_name' => $data['site_url'],
			'title' => $data['site_name']
		];

        $site = Guzzle::createSite($site_data);

        if(!$site) {
			// TODO delete user with WP API
			User::destroy($user->id);
			return $this->json(false, 'Error creating site. Please try again');
		}

		$data['meta'] = collect($data)->except(['first_name', 'last_name', 'email', 'password']);
//		$meta_data = $data['meta']->map(function($v, $k) use ($user) {
//			return [
//				'user_id' => $user->id,
//				'meta_key' => 'site_data',
//				'meta_value' => $v
//			];
//		})->toArray();

        $meta_data = [
            'user_id' => $user->id,
            'meta_key' => 'site_data',
            'meta_value' => json_encode($data['meta'])
        ];

        $saved = UserMeta::insert($meta_data);

		if(!$saved) {
			return $this->json(false, 'Error saving site data. Please try again');
		}

		Auth::loginUsingId($user->id);

		return $this->json(true, [
			'message' => 'Site created successfully',
			'url' => '/dashboard'
		]);

    }
}
