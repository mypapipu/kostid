<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller {

    /**
     * Display Cart
     */
    public function index()
    {
        $data['_TITLE_'] = 'Cart';
        $data['_KEYWORDS_'] = 'Cari Info Kost?';
        $data['_DESCRIPTION_'] = 'Cari Info Kost?';

        $data['ID'] = 1;

        return view('cart/cart', $data);
    }

    /**
     * Display Payment
     */
    public function payment()
    {
        $data['_TITLE_'] = 'Payment';
        $data['_KEYWORDS_'] = 'Cari Info Kost?';
        $data['_DESCRIPTION_'] = 'Cari Info Kost?';

        return view('cart/payment', $data);
    }

    /**
     * Display Checkout
     */
    public function confirmation()
    {
        $data['_TITLE_'] = 'Confirm';
        $data['_KEYWORDS_'] = 'Cari Info Kost?';
        $data['_DESCRIPTION_'] = 'Cari Info Kost?';

        return view('cart/confirmation', $data);
    }

    /**
     * Display Invoice
     */
    public function invoice($id)
    {
        $data['_TITLE_'] = 'Invoice #'. $id;
        $data['_KEYWORDS_'] = 'Cari Info Kost?';
        $data['_DESCRIPTION_'] = 'Cari Info Kost?';

        return view('cart/invoice', $data);
    }
}
