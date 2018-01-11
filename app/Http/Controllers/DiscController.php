<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscController extends Controller
{
    public function index() {
    	return view('layouts.disc');
    }
}
