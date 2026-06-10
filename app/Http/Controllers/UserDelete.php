<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class UserDelete extends Controller
{
    public function confirmDelete(): RedirectResponse {
        return redirect()->back()->with([
            'confirm' => true,
            'id' => Crypt::encrypt(Auth::user()->id)
        ]);
    }

    public function delete($id): RedirectResponse {

        $id = Crypt::decrypt($id);
        $user = User::find($id);

        $user->delete();

        return redirect()->route('home');
    }
}
