<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $data = array(
            'id' => $id,
            '1name' => 'Harry Potter: Prisoner of Muntilupa',
            '2name' => 'Ibong naging Darna',
            '3name' => 'The Chronicles of Phlippine Senate',
            '4name' => 'Ang hotdog ni Aljur'   
        );

       
    }
}


