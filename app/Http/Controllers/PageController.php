<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function bookStore_home(Request $request)
    {
        return view('pages.bookStore.home');
    }
<<<<<<< HEAD
    public function bookStore_buySectioon(Request $request)
    {
        return view('pages.bookStore.buySection');
    }
=======
    public function bookStore_buySection(Request $request)
    {
        return view('pages.bookStore.buySection');
    }

>>>>>>> e484e58a40ed74ce999885491a3bec1d0e7aa6f9
}
