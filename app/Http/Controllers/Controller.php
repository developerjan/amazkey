<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function json($success, $data = [], $message = '') {
        $result = ['success' => $success];
        if($data) {
            if(gettype($data) == 'string') {
                $result['message'] = $data;
            } else {
                $result = array_merge($result, $data);
            }
        }
        
        if($message) {
            $result['message'] = $message;
        }
        
        return response()->json($result);
    }
}
