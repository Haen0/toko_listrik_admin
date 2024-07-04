@extends('utama.index')

@section('content')
    <div class="review w-4/5 mx-auto">
        <p class="text-xl my-5 font-semibold">Notification</p>
        <p class="text-center bg-slate-200 justify-evenly px-4 py-2 rounded-lg shadow-3xl font-semibold my-5">All notification</p>
        <div class="bg-slate-200 shadow-3xl  my-2 mx-auto rounded-md p-3">
            <div class="pemesan flex m-2">
                <p>Farhan</p>
                <a href="/order" class="ms-auto">Read More</a>
                <svg class="w-4 h-4 mt-1.5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m9 5 7 7-7 7"/>
                </svg>
            </div>
        </div>
        <div class="bg-slate-200 shadow-3xl  my-2 mx-auto rounded-md p-3">
            <div class="pemesan flex m-2">
                <p>Farhan</p>
                <p class="font-light mx-3">Memesan lampu tidur 5 Watt</p>
                <a href="/order" class="ms-auto">Read More</a>
                <svg class="w-4 h-4 mt-1.5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m9 5 7 7-7 7"/>
                </svg>
            </div>
        </div>
        
@endsection