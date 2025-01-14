<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function bookStore_home(Request $request)
    {
        return view('pages.bookStore.home');
    }
}
