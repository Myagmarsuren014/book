<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function bookStore_home(Request $request)
    {
        return view('pages.bookStore.home');
    }
    public function bookStore_buySection(Request $request)
    {
        return view('pages.bookStore.buySection');
    }
    public function bookStore_souvnerBuy(Request $request)
    {
        return view('pages.bookStore.souvnerBuy');
    }


}
