<?php

namespace App\Http\Controllers;


use Socialite;
use Illuminate\Routing\Controller;

class FacebookController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

//        $token = $user->token;
//        echo $user->getName();
//        echo "<br/>";
//        echo $user->getEmail();
//        echo "<img src='" .$user->getAvatar()."'>";
    }
}