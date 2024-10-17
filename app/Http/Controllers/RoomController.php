<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function standard()
    {
        return view('rooms.standart'); 
    }

    public function deluxe()
    {
        return view('rooms.deluxe'); 
    }

    public function suite()
    {
        return view('rooms.suite'); 
    }
}
