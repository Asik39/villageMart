<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sliderModel;
use App\Models\ad_center;
use App\Models\featuredModel;
use App\Models\brandModel;
use App\Models\categoriesModel;
use App\Models\subCategoriesModel;

class homeController extends Controller
{
    function homeIndex(){  
        $slider = sliderModel::all();   
        $adCenter = ad_center::all();
        $featured = featuredModel::simplePaginate(6);
        $brand = brandModel::all();
        $category = categoriesModel::all();
        $subCat = subCategoriesModel::all();
        

        return view('Home',compact('slider','adCenter','featured','brand','category','subCat'));
    }

    function orderTrack(){
        $category = categoriesModel::all();
        $subCat = subCategoriesModel::all();
        return view('trackYourOrder',compact('category','subCat'));
    }
    function whisList(){
        $category = categoriesModel::all();
        $subCat = subCategoriesModel::all();
        return view('whisList',compact('category','subCat'));
    }
    function productView(){
        $category = categoriesModel::all();
        $subCat = subCategoriesModel::all();
        return view('productDetails',compact('category','subCat'));
    }
    
}
