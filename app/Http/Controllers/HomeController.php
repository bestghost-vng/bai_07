<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaiViet;
class HomeController extends Controller
{
    public function index(){
            $lst =BaiViet::all();
            return view('home',['lst'=>$lst]);
    }
}
