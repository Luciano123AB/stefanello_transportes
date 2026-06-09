<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DataUpdate extends Controller
{
    public function imageUpdate(Request $request): RedirectResponse {
        $request->validate(
            [
                'image' => 'required|image|mimetypes:image/jpeg,image/png|max:10240',
            ]
        );

        $image = $request->file('image');
        $type_image = $image->getClientOriginalExtension();

        if (!Storage::disk('images')->put('owner_profile.' . $type_image, file_get_contents($image))) {
            return redirect()->back()->withErrors(['image' => 'Erro ao atualizar a imagem.']);
        }

        foreach (Storage::disk('images')->files() as $file) {

            $name = basename($file);

            if (str_starts_with($name, 'owner_profile.') && $name !== 'owner_profile.' . $type_image) {
                Storage::disk('images')->delete($file);
            }
        }

        return redirect()->back()->with('image_success', 'Imagem atualizada com sucesso.');
    }

    public function dataUpdate(Request $request): RedirectResponse {
        $request->validate(
            [
                'name' => 'required|string|min:3|max:255',
                'email' => 'required|string|email|max:255'
            ]
        );

        $username = $request->input('name');
        $email = $request->input('email');
        $id = Auth::user()->id;
        $user = User::find($id);

        $user->name = $username;
        $user->email = $email;
        $user->save();

        if (!$user) {
            return redirect()->back()->withErrors(['data_error' => 'Erro ao atualizar os dados.']);
        }

        return redirect()->back()->with('data_success', 'Dados atualizados com sucesso.');
    }

    public function passwordUpdate(Request $request): RedirectResponse {
        $request->validate(
            [
                'current_password' => 'required',
                'password' => 'required|string|min:8|max:255|regex:/(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&]).+$/|confirmed',
                'password_confirmation' => 'required'
            ]
        );

        $current_password = $request->input('current_password');
        $password = $request->input('password');
        $id = Auth::user()->id;
        $user = User::find($id);

        if (!Hash::check($current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Senha atual incorreta.']);
        }

        $user->password = Hash::make($password);
        $user->save();

        if (!$user) {
            return redirect()->back()->withErrors(['password_error' => 'Erro ao atualizar a senha.']);
        }

        return redirect()->back()->with('password_success', 'Senha atualizada com sucesso.');
    }
}
