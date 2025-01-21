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
    public function bookStore_purchase( Request $request)
    {
        return view('pages.bookStore.purchase');
    }
    public function bookStore_qpay( Request $request)
    {
        return view('pages.bookStore.qpay');
    }
    public function bookStore_verified( Request $request)
    {
        return view('pages.bookStore.verified');
    }


}
