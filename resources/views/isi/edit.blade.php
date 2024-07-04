@extends('utama.index')

@section('content')
<div class="bungkus w-4/5 mx-auto">
    <h1 class="text-2xl font-bold text-slate-600 text-center my-10">Edit Produk</h1>
    <form action="{{ route('produk.update', $produk->id_produk) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="id_kategori" class="block text-sm font-medium text-gray-700">ID Kategori</label>
            <input type="text" name="kategori" id="id_kategori" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" value="{{ $produk->kategori }}" required>
            <input type="hidden" name="rate"  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" value="0" required>
        </div>
        <div class="mb-4">
            <label for="id_penjual" class="block text-sm font-medium text-gray-700">ID Penjual</label>
            <input type="text" name="id_penjual" id="id_penjual" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" value="{{ $produk->id_penjual }}" required>
        </div>
        <div class="mb-4">
            <label for="nama_produk" class="block text-sm font-medium text-gray-700">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" value="{{ $produk->nama_produk }}" required>
        </div>
        <div class="mb-4">
            <label for="harga_produk" class="block text-sm font-medium text-gray-700">Harga Produk</label>
            <input type="text" name="harga_produk" id="harga_produk" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" value="{{ $produk->harga_produk }}" required>
        </div>
        <div class="mb-4">
            <label for="desc_produk" class="block text-sm font-medium text-gray-700">Deskripsi Produk</label>
            <textarea name="desc_produk" id="desc_produk" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>{{ $produk->desc_produk }}</textarea>
        </div>
        <div class="mb-4">
            <label for="gambar_produk_1" class="block text-sm font-medium text-gray-700">Gambar Produk 1</label>
            <input type="file" name="gambar_produk_1" id="gambar_produk_1" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
        </div>
        <div class="mb-4">
            <label for="gambar_produk_2" class="block text-sm font-medium text-gray-700">Gambar Produk 2</label>
            <input type="file" name="gambar_produk_2" id="gambar_produk_2" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
        </div>
        <div class="mb-4">
            <label for="gambar_produk_3" class="block text-sm font-medium text-gray-700">Gambar Produk 3</label>
            <input type="file" name="gambar_produk_3" id="gambar_produk_3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm">
        </div>
        <div class="mb-4">
            <label for="stok_produk" class="block text-sm font-medium text-gray-700">Stok Produk</label>
            <input type="text" name="stok_produk" id="stok_produk" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" value="{{ $produk->stok_produk }}" required>
        </div>
        <div class="text-center">
            <button type="submit" class="bg-blue-500 text-white font-semibold px-5 py-2 rounded-lg">Simpan</button>
        </div>
    </form>
</div>
@endsection
