<?php

namespace App\Http\Controllers\Frontend;

use JWTAuth;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller {
    
    public function index()
    {
        $data['_TITLE_'] = 'Info Kost Terlengkap';
        $data['_DESCRIPTION_'] = '';
        $data['_KEYWORDS_'] = '';

        return view('frontend.layout', $data);
    }

}
