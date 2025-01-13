<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function daatgal_form(Request $request)
    {
        return view('pages.daatgal.form');
    }

    public function daatgal_next(Request $request)
    {
        return view('pages.daatgal.next');
    }
    public function daatgal_purchase(Request $request)
    {
        return view('pages.daatgal.purchase');
    }
    public function daatgal_qpay(Request $request)
    {
        return view('pages.daatgal.qpay');
    }
    public function daatgal_verified (Request $request)
    {
        return view('pages.daatgal.verified');
    }
    public function daatgal_option(Request $request)
    {
        return view('pages.daatgal.option');
    }
    public function admin_table(Request $request)  {
        return view('pages.admin.table');
    }
}
