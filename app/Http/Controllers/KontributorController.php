<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karya;
use Illuminate\Support\Facades\Auth;

class KontributorController extends Controller
{
    public function create()
    {
        return view('kontributor.upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tema' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $filename = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('upload'), $filename);

        Karya::create([
            'user_id' => Auth::id(),
            'judul' => $request->judul,
            'tema' => $request->tema,
            'deskripsi' => $request->deskripsi,
            'gambar' => $filename,
        ]);

        return redirect()->route('kontributor')->with('success', 'Karya berhasil diunggah!');
    }
}
