<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArtikelModel;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    public function index() {
        $artikel = ArtikelModel::get_all();
        return view('artikel.index', compact('artikel'));
    }

    public function create() {
        return view('artikel.create');
    }

    public function store(Request $request) {
        $judul = $request['judul'];
        $request['slug'] = Str::slug($judul);
        //$create = ArtikelModel::save($request);
        $artikel = ArtikelModel::save([
            'judul' => $request->judul, 'isi' => $request->isi, 'slug' => $request->slug,
            'tag' => $request->tag
        ]);
        return redirect('/artikel');
    }

    public function show(Request $request) {
        $id = $request['id'];
        $artikel = ArtikelModel::get_id($id);
        return view ('artikel.detail', compact('artikel'));
    }

    public function edit(Request $request) {
        $id = $request['id'];
        $artikel = ArtikelModel::get_id($id);
        return view ('artikel.edit', compact('artikel'));
    }

    public function update(Request $request, $id) {
        $judul = $request['judul'];
        $request['slug'] = Str::slug($judul);
        $artikel = ArtikelModel::update([
            'judul' => $request->judul, 'isi' => $request->isi, 'slug' => $request->slug,
            'tag' => $request->tag
        ], $id);
        return redirect('/artikel');
    }

    public function destroy(Request $request, $id) {
        $hapus = ArtikelModel::destroy($id);
        return redirect('/artikel');
    }
}
