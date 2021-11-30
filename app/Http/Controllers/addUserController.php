<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class addUserController extends Controller
{
    public function insertUser(Request $req)
    {
        $name = trim($req->name);
        $username = trim($req->username);
        $password = trim($req->password);
        $password = password_hash($password ,PASSWORD_BCRYPT);
        $email = trim($req->email);


        $checkEmail = User::where('email', $email)->first();
        $checkUsername = User::where('email', $email)->first();
        if($checkEmail)
        {
            $msg =  'Email is already used, please try another one';
            return view('addUser')->with('msg' , $msg);
        }elseif($checkUsername){
            $msg =  'Username is already used, please try another one';
            return view('addUser')->with('msg' , $msg);
        }else {
            $insert = User::insert(
                [
                 'name' => $name,
                 'username' => $username,
                 'password' => $password,
                 'email' => $email
                ]
            );
            if($insert){
                $msg =  'Congratulations! User Added Successfully';
                return view('addUser')->with('msg' , $msg);
            }
        }      
    }
}
