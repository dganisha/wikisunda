<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function art()
    {
        return view('page.art');
    }

    public function culinary()
    {
        return view('page.culinary');
    }

    public function history()
    {
        return view('page.history');
    }

    public function place()
    {
        return view('page.place');
    }
}
