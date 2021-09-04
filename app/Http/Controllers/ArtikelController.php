<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    // untuk menampilkan list data
    public function index()
    {
        $data = Artikel::paginate(5);
        return view('artikel.index', compact('data'));
    }

    // untuk menampilkan form input
    public function create()
    {
        return view('artikel.create');
    }

    // untuk menyimpan data
    public function store(Request $request)
    {
        $model = $request->all();
        Artikel::create($model);
        return redirect('artikel');
    }

    // untuk menampilkanform edit
    public function edit($id)
    {
        $data = Artikel::find($id);
        return view('artikel.edit', compact('data'));
    }

    // untuk mengupdate data
    public function update(Request $request)
    {
        $model = $request->all();
        $data = Artikel::find($model['id']);
        $data->update($model);
        return redirect('artikel');
    }

    // untuk menhapus data
    public function destroy($id)
    {
        $data = Artikel::find($id)->delete();
        return redirect('artikel');
    }
}
