<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function chambre()
    {
        return view('pages.chambres');
    }

    public function appartements()
    {
        return view('pages.appartements');
    }

    public function restaurant()
    {
        return view('pages.restaurant');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
