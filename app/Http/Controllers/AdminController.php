<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    
    public function __construct(){
    
    }

    public function index()
    {
        
        return view('pages.admin.index');
        
    }
    public function login (){
    
        return view('auth.login_admin');    
    }

    public function postLogin(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|min:3|max:100',
            'password' => 'required|min:3|max:100',
        ]);
          
        if ($validator->fails()) {
            return redirect('/admin/login')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $credenciais = ['email'=>$request->get('email'), 'password'=>$request->get('password')];
        if(auth()->guard('admin')->attempt($credenciais)){
            return redirect('/admin');
        }else{
            return redirect('admin/login')
                            ->WithErrors(['errors'=>'login invalido'])
                            ->WithInput();

        }

    }

    public function logout(){
        auth()->guard('admin')->logout();
        return redirect('/');
    }
}
