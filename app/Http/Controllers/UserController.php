<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Customer;
use Auth;

class UserController extends Controller
{
    //

    public function getIndex(){
        return view('pages.index');
    }

    public function login(Request $req){
        $email = $req->email;
        $password = $req->password;

        $customer = DB::table('customers')->where('email',$email)->get();

        if(count($customer) && $customer[0]->password == $password) {
            Session::put('success-login','Successfully logedin.');
            return view('pages/userdashboard')->with('customer',$customer);
        }
        else {
            Session::put('invalid-credential','Email and Password does not match, please try again.');
            return redirect('/');
        }
    }


    public function getRegister(){
        return view('pages.register');
    }

    public function register(Request $req){

        $name = $req->name;
        $email = $req->email;
        $password = $req->password;

        $customer = DB::table('customers')->where('email',$email)->get();

        if(strlen($name) == 0 || strlen($email) == 0 || strlen($password) == 0 ) {
            Session::put('invalid-details','Please enter valid information');
            return redirect('/register');
        }
        
        if(count($customer)) {
            Session::put('failed-register','Email is not available');
            return redirect('/register');
        }

        else {
            
            $user = New Customer;

            $user->name = $name;
            $user->email = $email;
            $user->password = $password;

            $user->save();
            //$customer = DB::table('customers')->where('email',$email)->get();

            Session::put('success-register','You have successfully registered. You can login now and experience the website.');

            return redirect('/');
        }
    }

    public function pageNotFound() {
        return view('pages.pagenotfound');
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
