<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpdController extends Controller
{
    public function index()
    {

        return view('accueil');
    }
}
