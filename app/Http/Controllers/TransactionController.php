<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transaction;

class TransactionController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $transaction = Transaction::allWithRelation(['member' => TRUE]);
        return $transaction;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $transaction = Transaction::findWithRelation($id, '', ['member' => TRUE]);
        return $transaction;
    }

}
