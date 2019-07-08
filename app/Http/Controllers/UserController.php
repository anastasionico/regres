<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class UserController extends Controller
{

    public function getUsers()
    {
        $client = new Client();

        $response = $client->request('GET', 'https://reqres.in/api/users');

        $users = json_decode($response->getBody()); 

        return view('index', ['users' => $users->data]);
    }

    public function getLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        
        if($request->password == ''){
            return view('login', ['error' => "missing password"]);            
        }
        $client = new Client();
        $request = $client->request('POST', 'https://reqres.in/api/login', [
            'form_params' => [
                'email' => $request->email,
                'password' => $request->password,
            ]
        ]);

        $request = json_decode($request->getBody()); 
        

        return view('login', ['token' => $request->token]);
        
    }

    public function getRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        
        if($request->password == ''){
            return view('register', ['error' => "missing password"]);            
        }
        $client = new Client();
        $request = $client->request('POST', 'https://reqres.in/api/register', [
            'form_params' => [
                'email' => $request->email,
                'password' => $request->password,
            ]
        ]);

        $request = json_decode($request->getBody()); 
        

        return view('register', [
            'token' => $request->token,
            'id' => $request->id
        ]);
        
    }    

    public function getJobs()
    {
        $client = new Client();

        $response = $client->request('GET', 'https://reqres.in/api/color');

        $color = json_decode($response->getBody()); 
        dd($color);

        // return view('index', ['users' => $users->data]);
    }
}