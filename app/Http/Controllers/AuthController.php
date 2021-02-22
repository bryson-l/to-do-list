<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // log in
    public function login(array $data) {

    }

    // register
    protected function create(array $data) {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'admin' => $data['admin'],
            'api_token' => Str::random(60),
        ]);
    }
}
