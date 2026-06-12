<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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

    public function fileList() {

        $disk = Storage::disk('documents');
        $all_files = $disk->allFiles();
        $files = [];

        foreach ($all_files as $file) {

            $size = round($disk->size($file) / 1024 / 1024, 1) . "MB";

            if ($disk->size($file) / 1024 / 1024 < 1) {
                $size = round($disk->size($file) / 1024, 2) . "KB";
            }

            $files[] = [
                "name" => $file,
                "size" => $size,
                "last_modified" => Carbon::createFromTimestamp($disk->lastModified($file))->format("d-m-Y H:i:s")
            ];
        }

        return view('archives', compact('files'));
    }
}