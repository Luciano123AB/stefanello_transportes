<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class MainController extends Controller
{
    public function home(): View {
        return view('home');
    }

    public function moreInformations(): View {
        return view('more_informations');
    }

    public function editProfile(): View {

        $user = Auth::user();
        $data = User::find($user->id);
        $other_data = Data::first();

        return view('auth.edit_profile')->with([
            'data' => $data,
            'other_data' => $other_data
        ]);
    }
}