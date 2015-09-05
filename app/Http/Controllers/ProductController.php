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
    public function api()
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
    public function api_detail($id)
    {
        $product = Product::find($id);
        $product->product_facility->toArray();
        $product->image->toArray();
        $product->city->toArray();
        $product->type->toArray();
        return $product;
    }

    /**
     * Display detail product
     * @param  int $id
     */
    public function detail($id)
    {
        $product = Product::find($id);

        if (!$product)
        {
            App::abort(404);
        }

        $data['ID'] = $id;

        $data['_TITLE_'] = $product->name;
        $data['_KEYWORDS_'] = 'Cari Info Kost?';
        $data['_DESCRIPTION_'] = 'Cari Info Kost?';

        $data['id'] = $id;

        return view('product/detail', $data);
    }

}
