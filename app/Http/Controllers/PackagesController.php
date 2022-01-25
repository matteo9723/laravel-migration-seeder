<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function index(){

        $package = Package::all();
        return view('packages', compact('package') );
    }
}
