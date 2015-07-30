<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $product = Product::allWithRelation(['city' => TRUE, 'type' => TRUE, 'image' => TRUE, 'product_facility' => TRUE]);
        return $product;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $product->product_facility->toArray();
        $product->image->toArray();
        $product->city->toArray();
        $product->type->toArray();
        return $product;
    }

}
