<?php

namespace App\Http\Controllers\Frontend;

use JWTAuth;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller {
    
    public function index()
    {
        return view('frontend.template');
    }
    
    public function invoice()
    {
        return view('frontend.invoice');
    }

}