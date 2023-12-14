<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function __invoke()
    {
        return view('listings.index');
    }
}
