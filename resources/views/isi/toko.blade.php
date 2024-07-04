@extends('utama.index')

@section('content')
    <div class="bungkus w-4/5 mx-auto text-center">
        <h1 class="text-2xl font-bold text-slate-600 border-b-2 mt-10 inline-block pb-1 border-slate-600">Pengaturan Toko Anda</h1>
        <div class="profil bg-slate-200 p-5 mt-6 rounded-lg shadow-3xl">
            <form action="{{ route('store.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="nama flex my-7">
                    <p>Nama :</p>
                    <input type="text" name="name" value="{{ $store->name }}" class="w-4/5 ms-auto rounded-md p-1 h-7">
                </div>
                <div class="alamat flex my-7">
                    <p>Alamat :</p>
                    <input type="text" name="street" value="{{ $store->street }}" class="w-4/5 ms-auto rounded-md p-1 h-7">
                </div>
                <div class="foto flex my-7">
                    <p>Foto :</p>
                    <div class="ms-48">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-20 h-20 ms-auto border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                                </svg>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Logo Toko</p>
                            </div>
                            <input id="dropzone-file" type="file" name="logo" class="hidden" />
                        </label>
                    </div> 
                </div>
                <div class="deskripsi flex my-7">
                    <p>Deskripsi :</p>
                    <input type="text" name="about" value="{{ $store->about }}" class="w-4/5 ms-auto rounded-md p-2 h-7">
                </div>
                <div class="action text-right text-sm mt-10">
                    <button type="button" onclick="window.location='{{ url()->previous() }}'" class="font-semibold bg-red-500 py-1 px-3 rounded-md">Batal</button>
                    <button type="submit" class="font-semibold bg-slate-400 py-1 px-3 rounded-md">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
