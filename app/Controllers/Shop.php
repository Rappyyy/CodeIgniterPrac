<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index(): string
    {
        return view('shop');
    }

    public function product($type, $product_id)
    {
        echo '<h2> This is a product: ' . $type . ' with an id of: ' . $product_id . '<h2';
        // return view('product');
    }


    //to protect a function and not to be routed
    protected function adminCheck()
    {
        echo 'This is a protected area';
    }
}
