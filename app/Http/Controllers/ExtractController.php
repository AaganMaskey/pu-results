<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helper\Extraction;

class ExtractController extends Controller
{
    //
    public function extract()
    {
    	$extraction = new Extraction();
        $extraction->extract();
        return view('extract.extract'); // return just to make the stylesheet work
    }
}
