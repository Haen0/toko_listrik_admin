@extends('utama.index')

@section('content')
    <div class="bungkus w-3/5 mx-auto text-center">
        <h1 class="text-2xl font-bold text-slate-600 border-b-2 mt-10 inline-block pb-1 border-slate-600">Setting Your Profile</h1>
        <div class="profil bg-slate-200 p-5 mt-6 rounded-lg shadow-3xl">
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                <div class="nama flex my-7">
                    <p>Nama :</p>
                    <input type="text" name="name" value="{{ $store->owner }}" class="w-4/5 ms-auto rounded-md p-1 h-7">
                </div>
                <div class="email flex my-7">
                    <p>Email    :</p>
                    <input type="email" name="email" value="{{ $store->email }}" class="w-4/5 ms-auto rounded-md p-1 h-7">
                </div>
                <div class="password flex my-7">
                    <p>Password (optional) :</p>
                    <input type="password" name="password" class="w-4/5 ms-auto rounded-md p-1 h-7">
                </div>
                <div class="telp flex my-7">
                    <p>No Telp :</p>
                    <input type="tel" name="phone" value="{{ $store->phone }}" class="w-4/5 ms-auto rounded-md p-2 h-7">
                </div>
                <div class="action text-right text-sm mt-10">
                    <button type="button" onclick="window.location='{{ url()->previous() }}'" class="font-semibold bg-red-500 py-1 px-3 rounded-md">Cancel</button>
                    <button type="submit" class="font-semibold bg-slate-400 py-1 px-3 rounded-md">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
