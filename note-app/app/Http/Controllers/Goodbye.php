<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Goodbye extends Controller
{

    public function goodbye()
    {
        return view('goodbye');
    }
}

