<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Archives extends Controller
{
    public function fileUpload(Request $request) {
        $request->validate(
            [
                'file' => 'required|file|mimetypes:application/pdf,image/jpeg,image/png|max:10240'
            ]
        );

        $disk = Storage::disk('documents');
        $file = $request->file('file');

        if (!$disk->put($file->getClientOriginalName(), file_get_contents($file))) {
            return redirect()->back()->withErrors(['file' => 'Erro ao enviar o arquivo.']);
        }

        return redirect()->back()->with('success', 'Arquivo enviado com sucesso.');
    }

    public function fileView($name) {

        $disk = Storage::disk('documents');
        $file_exists = $disk->exists($name);

        if (!$file_exists) {
            return redirect()->back()->withErrors(['file' => 'Arquivo não encontrado.']);
        }

        return view('file_view')
            ->with('name', $name)
            ->with('type', $disk->mimeType($name));
    }

    public function fileDownload($name) {

        $disk = Storage::disk('documents');
        $file_exists = $disk->exists($name);

        if (!$file_exists) {
            return redirect()->back()->withErrors(['file' => 'Arquivo não encontrado.']);
        }

        $path = $disk->path($name);

        return response()->download($path, $name);
    }

    public function fileDelete($name) {

        $disk = Storage::disk('documents');
        $file_exists = $disk->exists($name);

        if (!$file_exists) {
            return redirect()->back()->withErrors(['file' => 'Arquivo não encontrado.']);
        }

        $file = $disk->delete($name);

        if (!$file) {
            return redirect()->back()->withErrors(['file' => 'Erro ao excluir o arquivo.']);
        }

        return redirect()->back()->with('success', 'Arquivo excluído com sucesso.');
    }
}
