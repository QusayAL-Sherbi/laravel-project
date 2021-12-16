<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show()
    {
      $products = [
        "id"=>"1",
        "name"=>"watch",
        "price"=>"50 JD",
      ];
      return view('products',compact($products));
    }
}
