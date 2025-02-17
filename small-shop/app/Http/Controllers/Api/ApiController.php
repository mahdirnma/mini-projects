<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function response($data=[],String $message='',$status=200){
        $body=[];
        $message!='' && $body['message']=$message;
        $data!='' && $body['data']=$data;
        return response()->json($body, $status);
    }
}
