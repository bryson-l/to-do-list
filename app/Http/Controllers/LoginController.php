<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use DB;

class LoginController extends Controller{

    // SELECT * from USERS where username=request.username and password=request.password
    // if there's a match use the User Model to generate and save a token in the database
    public function login(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $result = Users::where('username', $username)
                 ->where('password', $password)
                 ->first();
        if ($result) { //the query returned 1 user
            return response()->json($result->generateToken()); // return a response with the token as a JSON response
        } 
        return response()->json(['error' => 'Username and password do not match'], 400);
    }
}