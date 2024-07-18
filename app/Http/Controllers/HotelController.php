<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function chambre()
    {
        return view('chambres');
    }

    public function appartements()
    {
        return view('appartements');
    }

    public function restaurant()
    {
        return view('restaurant');
    }

    public function contact()
    {
        return view('contact');
    }
}
