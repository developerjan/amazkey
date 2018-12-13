<?php

namespace App\Helpers;

use GuzzleHttp\Client;


class Guzzle {

    public static function get($url, $domain = '') {
        $client = new Client();
        $site_domain = env('REMOTE_API_URL');

        if($domain) {
            $site_domain = str_replace('zitsy.com/', 'zitsy.com/'.$domain.'/', env('REMOTE_API_URL'));
        }

        $response = $client->get($site_domain.$url);
        return self::response($response);
    }

    public static function post($url, $data, $domain = '') {
        $client = new Client();
        $site_domain = env('REMOTE_API_URL');
        if($domain) {
            $site_domain = str_replace('zitsy.com/', 'zitsy.com/'.$domain.'/', env('REMOTE_API_URL'));
        }

	    $response = $client->post($site_domain.$url, [
            'form_params' => $data,
	        'headers' => self::headers($domain)
        ]);
        return self::response($response);
    }

    public static function put($url, $data) {
        $client = new Client();
	    $response = $client->put(env('REMOTE_API_URL').$url, [
            'form_params' => $data,
            'headers' => self::headers()
        ]);
        return self::response($response);
    }

    public static function delete($url, $token = null) {
        $client = new Client();
	    $response = $client->delete(env('REMOTE_API_URL').$url, ['headers' => self::headers()]);
        return self::response($response);
    }

    public static function login($data, $domain = '') {
        $client = new Client();
        $url = !$domain ? env('TOKEN_URL') : str_replace('zitsy.com/', 'zitsy.com/'.$domain.'/', env('TOKEN_URL'));
        $response = $client->post($url, [
        	'form_params' => $data
        ]);
        return self::response($response);
    }

	public static function token($domain = '') {
		$data = self::login([
			'username' => env('APP_USER'),
			'password' => env('APP_PASSWORD')
		], $domain);
		return $data->token;
    }

	public static function createSite($data) {
		$client = new Client();
		$response = $client->post(env('API_CREATE_SITE_URL'), [
			'headers' => [
				'Content-Type' => 'application/json',
				'User' => env('APP_USER'),
				'Password' => env('APP_PASSWORD')
			],
			'body' => json_encode($data)
		]);

		return self::response($response);
	}

	private static function headers($domain = '') {
		$token = self::token($domain);
		return ['Authorization' => 'Bearer '.$token];
	}

    private static function response($response) {
        $body = $response->getBody()->getContents();
        return json_decode($body);
    }

}