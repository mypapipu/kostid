<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\City;

class CityController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function api()
    {
        $city = City::all();
//        $city = City::allWithRelation(['product' => TRUE]);
        return $city;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function api_detail($id)
    {
        $city = City::find($id);
        return $city;
    }

    /**
     * Front-end product by city
     *
     * @param varchar $city
     * @param int $page
     */
    public function index($city='', $page=1)
    {
        $data['_TITLE_'] = $city;
        $data['_KEYWORDS_'] = 'Cari Info Kost?';
        $data['_DESCRIPTION_'] = 'Cari Info Kost?';

        $data['city'] = $city;

        $length = 12;
        $data['page'] = $page;
        $data['offset'] = $page>1 ? ($page-1)*$length : 0;

        return view('city/index', $data);
    }

    /**
     * Front-end product by district
     *
     * @param varchar $city
     * @param varchar $district
     * @param int $page
     */
    public function district($city='', $district='', $page=1)
    {
        $data['_TITLE_'] = $city. '-' .$district;
        $data['_KEYWORDS_'] = 'Cari Info Kost?';
        $data['_DESCRIPTION_'] = 'Cari Info Kost?';

        $data['city'] = $city;
        $data['district'] = $district;

        $length = 12;
        $data['page'] = $page;
        $data['offset'] = $page>1 ? ($page-1)*$length : 0;

        return view('city/district', $data);
    }    
}
