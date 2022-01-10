<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class TravelController extends Controller {
    
    function index(){
        $travels = Travel::all();
        dump($travels);
        return view("movies"
            
        );
    }
}
