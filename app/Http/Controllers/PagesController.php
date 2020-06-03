<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index () {
        $title = '';
        return view ('pages.home')->with('title', $title);
    }

    public function about () {
        $title = 'ABOUT';
        return view ('pages.about')->with('title', $title);
    }
}
