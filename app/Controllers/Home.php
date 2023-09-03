<?php

namespace App\Controllers;

use App\Controllers\Admin\Shop as AdminShop;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function getData(){
        return view('welcome_data');
    }

    function validation(){
        // Instantiate the Shop controller (not recommended, see note above)
        $shop = new Shop();

        // Call the product method and capture its output
        echo $shop->product('toy', '21').'<br>';

        // Print the product output
        // echo $productOutput;

        $AdminShop = new AdminShop();
        echo $AdminShop->product('toy', '21');
    
    }

}
