<?php

//

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
//        $member = Member::all();
        $member = Member::allWithRelation(['transaction' => TRUE]);
        return $member;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $member = Member::findWithRelation($id, '', ['transaction' => TRUE]);
        return $member;
    }

}
