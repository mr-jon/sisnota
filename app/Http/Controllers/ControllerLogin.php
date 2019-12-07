<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use AuthenticatesUsers;  

class ControllerLogin extends Controller{  

    public function __construct(){
        $this->middleware('auth');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }    

}