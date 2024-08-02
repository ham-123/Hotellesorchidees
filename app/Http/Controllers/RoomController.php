<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function classique()
    {
        return view('chambres.classique');
    }

    public function standard()
    {
        return view('chambres.standard');
    }

    public function prestigeDeLuxe()
    {
        return view('chambres.prestige-de-luxe');
    }

    public function prestigeVueSurLaMer()
    {
        return view('chambres.prestige-vue-sur-la-mer');
    }

    public function suiteVueSurLaPiscine()
    {
        return view('chambres.suite-vue-sur-la-piscine');
    }
}
