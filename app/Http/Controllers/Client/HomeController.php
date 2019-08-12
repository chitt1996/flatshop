<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('client.index');
    }
    public function contact(){
        return view('client.contact');
    }
    public function details(){
        return view('client.details');
    }
}
