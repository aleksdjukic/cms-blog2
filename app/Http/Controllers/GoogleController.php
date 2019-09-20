<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Illuminate\Routing\Controller;

class GoogleController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();

        return $user->name;

//        $token = $user->token;
//        echo $user->getName();
//        echo "<br/>";
//        echo $user->getEmail();
//        echo "<img src='" .$user->getAvatar()."'>";
    }
}