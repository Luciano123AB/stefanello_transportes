<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MainController extends Controller
{
    public function home(): View {
        return view('home');
    }
}