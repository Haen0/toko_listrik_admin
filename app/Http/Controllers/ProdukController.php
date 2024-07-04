<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $produks = Produk::where('id_penjual', $user->id)->get();
        return view('isi.produk', compact('produks'));
    }

    public function create()
    {
        return view('isi.tambah');
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $produks = Produk::where('id_penjual', $user->id)->get();
        // Validasi dan simpan data produk

        $validatedData = $request->validate([
            'kategori' => 'required|integer',
            'id_penjual' => 'required|integer',
            'nama_produk' => 'required|string|max:255',
            'harga_produk' => 'required|numeric',
            'desc_produk' => 'required|string',
            'gambar_produk_1' => 'required|image',
            'gambar_produk_2' => 'image|nullable',
            'gambar_produk_3' => 'image|nullable',
            'stok_produk' => 'required|integer',
            'rate' => 'required|integer',
        ]);

        if ($request->hasFile('gambar_produk_1')) {
            $validatedData['gambar_produk_1'] = $request->file('gambar_produk_1')->store('public/images');
        }
        if ($request->hasFile('gambar_produk_2')) {
            $validatedData['gambar_produk_2'] = $request->file('gambar_produk_2')->store('public/images');
        }
        if ($request->hasFile('gambar_produk_3')) {
            $validatedData['gambar_produk_3'] = $request->file('gambar_produk_3')->store('public/images');
        }

        Produk::create($validatedData);

        return view('isi.produk', compact('produks'));
    }

    public function show($id_produk)
    {
        $produk = Produk::findOrFail($id_produk);
        return view('isi.produk', compact('produk'));
    }

    public function edit($id_produk)
    {
        $produk = Produk::findOrFail($id_produk);
        return view('isi.edit', compact('produk'));
    }

    public function update(Request $request, $id_produk)
    {
        $validated = $request->validate([
            'kategori' => 'required',
            'id_penjual' => 'required',
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'desc_produk' => 'required',
            'gambar_produk_1' => 'required',
            'stok_produk' => 'required',
            'rate' => 'required',
        ]);

        Produk::whereId_produk($id_produk)->update($validated);

        return redirect()->route('produk.index');
    }

    public function destroy($id_produk)
{
    $produk = Produk::findOrFail($id_produk);
    $produk->delete();

    return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus');
}

}

