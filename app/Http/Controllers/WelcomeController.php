<?php

namespace App\Http\Controllers;

use JWTAuth;

class WelcomeController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Welcome Controller
      |--------------------------------------------------------------------------
      |
      | This controller renders the "marketing page" for the application and
      | is configured to only allow guests. Like most of the other sample
      | controllers, you are free to modify or remove it as you desire.
      |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function api()
    {
        /*
          $credentials = ['email' => 'adi@bola.net', 'password' => '123456'];

          try {
          $user = \App\User::create($credentials);
          } catch (Exception $e) {
          return response()->json(['error' => 'User already exists.']);
          }

          $token = JWTAuth::fromUser($user);

          return response()->json(compact('token'));
          // */

        /*
          //$token = JWTAuth::getToken();
          $user = JWTAuth::toUser('eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOjIsImlzcyI6Imh0dHA6XC9cL2xvY2FsaG9zdFwvand0XC9wdWJsaWNcL2FwaSIsImlhdCI6IjE0Mzc4MDE2NjkiLCJleHAiOiIxNDM3ODA1MjY5IiwibmJmIjoiMTQzNzgwMTY2OSIsImp0aSI6IjM1YTMxNGM3MjU3OTAzM2I0YWY4MjU4ZGM3M2FjN2RjIn0.FHSaGXHJpQIXoRrrEfUINwBQeTZ6CWIEUhlEOWiISSg');

          return response()->json(compact('user'));
          // */

        //*
        $data = \App\User::find(1);

        $token = JWTAuth::fromUser($data);

        return response()->json(compact('token'));

        // */

        /*
          //$credentials = ['email' => 'adi.cahyono@gmail.com', 'password' => '123456'];
          $credentials = \Input::only('email', 'password');

          if ( !$token = JWTAuth::attempt($credentials)) {
          return response()->json(false);
          }

          return response()->json(compact('token'));
          // */
    }

}
