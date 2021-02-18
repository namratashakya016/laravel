<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Users extends Controller
{
    public function getApi()
     {
     	$data = Http::get('https://reqres.in/api/users?page=1');
     	// print_r($data['data']);
     	return view('apiview',['collection'=>$data['data']]);
     } 
}
