<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index ()
    {
        return view('shop');
    }

    public function product($type='bike', $product_id='Dell'){
        
        echo '<h2>This is a product: '.$type.' with an id: '.$product_id.'</h2>';
        
        // echo '<h2>This is a product an Admin Product </h2>';
        // return view('product');

    }

    protected function adminCheck(){
        echo 'this is a protected area';
    }

}
