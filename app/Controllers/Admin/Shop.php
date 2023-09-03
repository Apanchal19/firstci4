<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class Shop extends BaseController
{
    public function index ()
    {
        echo '<h2>This is an Admin Shop Area</h2>';
    }

    public function product($type='laptop', $product_id='hp'){
        
        echo '<h2>This is a product: '.$type.' with an id: '.$product_id.'</h2>';
        // return view('product');

    }

    protected function adminCheck(){
        echo 'this is a protected area';
    }

}
