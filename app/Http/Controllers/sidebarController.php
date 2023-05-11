<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoriesModel;
use App\Models\subCategoriesModel;

class sidebarController extends Controller
{
    function getCatData(){
        $result = categoriesModel::get();   
        $result1 = subCategoriesModel::get();  
        $totalData = $result->merge($result1);          
        return $totalData;
        
    }
   
}
