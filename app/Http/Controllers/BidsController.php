<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BidsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }



    public function viewBids(Request $request)
    {
        return view('admin.bids.index');
    }
}
