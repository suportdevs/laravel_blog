<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginRegistationController extends Controller
{
    function LoginIndex()
    {
        return view('Login');
    }
    function CallGithub()
    {
        $callGithubLogin = Socialite::driver('github')->redirect();
        return $callGithubLogin;
    }

    function Dashboard()
    {
        return view('/Dashboard');
    }

    function GitHubCallBack()
    {
        $user = Socialite::driver('github')->stateless()->user();
        $token = $user->token;
        $userId = $user->getId();
        $nick_name = $user->getNickname();
        $name = $user->getName();
        $email = $user->getEmail();
        $img = $user->getAvatar();

        Session::put('token', $token);
        Session::put('userId', $userId);
        Session::put('nickName', $nick_name);
        Session::put('name', $name);
        Session::put('email', $email);
        Session::put('img', $img);

        $count = DB::table('users')->where('email', '=', $email)->count();
        if($count == 0){
            DB::table('users')->insert([
                'name' => $name,
                'email' => $email,
                'user_id' => $userId,
                'nick_name' => $nick_name,
            ]);
            return redirect('/Dashboard');
        }else{
            return redirect('/Dashboard');
        }
    }

    function userLogout(Request $request)
    {
        $request->session()->flush();
        return redirect('/Login');
    }

    function userLogin(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $count = DB::table('users')->where('name', '=', $name)->where('email', '=', $email)->count();

        if($count == 1){
            $request->session()->put('name', $name);
            return 1;

        }else{
            return 0;
        }
    }
}
