<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sliderModel;
class homeController extends Controller
{
    function homeIndex(){
       
        return view('Home');
    }

  
}
