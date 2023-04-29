<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sliderModel;
use App\Models\ad_center;
use App\Models\featuredModel;

class homeController extends Controller
{
    function homeIndex(){  
        $slider = sliderModel::all();   
        $adCenter = ad_center::all();
        $featured = featuredModel::all();
        return view('Home',compact('slider','adCenter','featured'));
    }

  
}
