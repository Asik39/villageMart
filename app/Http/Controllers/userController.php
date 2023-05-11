<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\categoriesModel;
use App\Models\subCategoriesModel;
use App\Models\userModel;
use App\Models\loginModel;

class userController extends Controller
{
    function myAccount(){
        $category = categoriesModel::all();
        $subCat = subCategoriesModel::all();
        return view('loginpage',compact('category','subCat'));
    }
    function register(){
        $category = categoriesModel::all();
        $subCat = subCategoriesModel::all();
        return view('resister',compact('category','subCat'));
    }
    function forgetPassword(){
        $category = categoriesModel::all();
        $subCat = subCategoriesModel::all();
        return view('forgetPassword',compact('category','subCat'));
    }
    function signup(Request $request){
        $rules = [
            'username'=>'required|min:3',
            'email'=>'required|email|unique:App\Models\userModel,email',
            'password'=>'required|min:5',
            'conPassword'=>'required|same:password'
        ];
        $cm=[
            'username.required'=>'Enter you username must be',
            'username.min'=>'Uaername minimum length is 3 must be',
            'email.required'=>'Enter you email must be',
            'email.email'=>'Enter the valid email address',
            'password.required'=>'Enter you password must be',
            'password.min'=>'Password minimum length is 5 must be',
            'conPassword.required'=>'Enter you Confirm Password must be',
            'conPassword.same'=>'Confirm Password are not same of Password'
        ];
        $this->validate($request,$rules,$cm);
        $signup = new userModel();
        $signup->userName = $request->username;
        $signup->email = $request->email;
        $signup->password = md5($request->password);
        $signup->save();
        Session::flash('msg','Signup successfully');
        $request->session()->put('key', '1');
        return redirect('/');
    }

    public function login(Request $request){
        $rules = [            
            'email'=>'required|email',
            'password'=>'required|min:5'
        ];
        $cm=[            
            'email.required'=>'Enter you email must be',
            'email.email'=>'Enter the valid email address',
            'password.required'=>'Enter you password must be',
            'password.min'=>'Password minimum length is 5 must be'
        ];

        $this->validate($request,$rules,$cm);        
     
        $email = $request->email;
        $password = md5($request->password);

        $user = userModel::where('email', $email)->where('password',$password)->first();

        if($user){
            $login = new loginModel();  
            $login->userName = $user->userName;          
            $login->email = $email;
            $login->password = $password;
            $login->save();
            Session::flash('msg','Login successfully');  
            $request->session()->put('key', '1');                    
            return redirect('./');
        }else{
            Session::flash('msg','email or password not match');            
        }

        return redirect('./');
        
    }
}
