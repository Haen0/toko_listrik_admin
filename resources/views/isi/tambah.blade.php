@extends('utama.index')

@section('content')
<div class="bungkus w-4/5 mx-auto">
    <h1 class="text-2xl font-bold text-slate-600 text-center my-10">Tambah Produk</h1>
    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id_penjual" value="{{ Auth::id() }}">
        <input type="hidden" name="rate" value="0">

        <div class="mb-4">
            <label for="id_kategori" class="block text-sm font-medium text-gray-700">ID Kategori</label>
            <input type="text" name="kategori" id="id_kategori" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="nama_produk" class="block text-sm font-medium text-gray-700">Nama Produk</label>
            <input type="text" name="nama_produk" id="nama_produk" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="harga_produk" class="block text-sm font-medium text-gray-700">Harga Produk</label>
            <input type="text" name="harga_produk" id="harga_produk" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="desc_produk" class="block text-sm font-medium text-gray-700">Deskripsi Produk</label>
            <textarea name="desc_produk" id="desc_produk" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required></textarea>
        </div>
        <div class="mb-4">
            <label for="gambar_produk_1" class="block text-sm font-medium text-gray-700">Gambar Produk 1</label>
            <input type="file" name="gambar_produk_1" id="gambar_produk_1" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
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
            <input type="text" name="stok_produk" id="stok_produk" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div class="text-center">
            <button type="submit" class="bg-blue-500 text-white font-semibold px-5 py-2 rounded-lg">Simpan</button>
        </div>
    </form>
</div>
@endsection
