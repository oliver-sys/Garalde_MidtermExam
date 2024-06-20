<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\show;

class ProductController extends Controller
{

    public function show($id) 
    {
       $data = array(
        "id" => $id,
        "name1" => 'Harry Potter',
        "name2" => 'Ibong Adarna',
        "name3" => 'Hekasi: Ang bagong umaga'
       );

       return view('welcome', ['data' => $data]);
    }

}

