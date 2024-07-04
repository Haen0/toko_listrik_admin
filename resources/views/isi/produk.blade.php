@extends('utama.index')

@section('content')

<div class="bungkus w-4/5 mx-auto">
    <div class="daftar flex justify-center text-center my-10">
        <h1 class="text-2xl font-bold text-slate-600">List Product</h1>
        <div class="crud ms-auto">
            <a class="text-sm text-white font-semibold text-center bg-blue-500 p-3 px-5 inline-block rounded-lg" href="{{ route('produk.create') }}">Add Product</a>
        </div>
    </div>
    <div class="overflow-x-auto ">
        <table class="table-auto mx-auto w-full">
            <thead class="bg-slate-200">
                <tr class=" overflow-hid_produkden rounded-xl">
                    <th class="py-2 font-semibold  text-sm">Foto</th>
                    <th class="font-semibold text-sm">Product</th>
                    <th class="font-semibold text-sm">Price</th>
                    <th class="font-semibold text-sm">Description</th>
                    <th class="font-semibold text-sm">Stok</th>
                    <th class="font-semibold text-sm">Action</th>
                </tr>
            </thead>
            <tbody class="overflow-hidden rounded-xl ">
                @foreach ($produks as $produk)
                <tr class="border-b-2 border-slate-200">
                    <td class="px-4 text-center  py-4">
                        <div class="inline-block">
                            @php
                                $imageSrc = '';
                        
                                if ($produk->nama_produk == 'Setrika Listrik') {
                                    $imageSrc = '/foto.jpg';
                                } elseif ($produk->nama_produk == 'Dispenser Air') {
                                    $imageSrc = '/foto3.jpg';
                                } elseif ($produk->nama_produk == 'Humidifier') {
                                    $imageSrc = '/foto2.jpg';
                                } elseif ($produk->nama_produk == 'Kompor Listrik') {
                                    $imageSrc = '/foto1.jpg';
                                } else {
                                    $imageSrc = '/foto4.jpg';
                                }
                            @endphp
                        
                            <img src="{{ $imageSrc }}" alt="Produk Image" class="w-16 h-16 object-cover mx-auto">
                        </div>
                    </td>
                    <td class="px-4 text-center text-sm">{{ $produk->nama_produk }}</td>
                    <td class="px-4 text-center text-sm">{{ $produk->harga_produk }}</td>
                    <td class="px-4 text-center text-sm">{{ $produk->desc_produk }}</td>
                    <td class="px-4 text-center text-sm">{{ $produk->stok_produk }}</td>
                    <td class="px-4 text-center text-sm">
                        <a href="{{ route('produk.edit', $produk->id_produk) }}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                        <form action="{{ route('produk.destroy', $produk->id_produk) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
