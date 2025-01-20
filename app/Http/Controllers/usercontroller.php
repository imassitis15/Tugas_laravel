<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller 
{
    public function master()
    {
        return view('template\seperate\master');
    }
    public function form()
    {
        return view('form');
    }
}
    //

   