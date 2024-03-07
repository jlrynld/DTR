<?php
namespace App\Http\Controllers;

class SignIncontroller extends Controller {

    public function index() {
        return view('contents.auth.sign-in');
    }      
}   

?>