<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('kunden.index');
    }

    public function profile(){
        return view('kunden.profil');
    }
}
