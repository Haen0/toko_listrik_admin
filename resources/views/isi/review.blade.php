<!-- resources/views/review/index.blade.php -->

@extends('utama.index')

@section('content')
    <div class="review w-4/5 mx-auto">
        <p class="text-xl my-5 font-semibold">Review</p>
        <div class="header flex bg-slate-200 justify-evenly px-4 py-2 rounded-lg shadow-3xl font-semibold">
            <a href="{{ route('reviews.index') }}" class="text-gray-800 dark:text-white">All Review</a>
            <a href="{{ route('reviews.waiting-for-reply') }}" class="text-gray-800 dark:text-white">Waiting For Reply</a>
        </div>
        
        @foreach($reviews as $review)
            <div class="bg-slate-200 shadow-3xl my-5 mx-auto rounded-md p-3">
                <div class="waktu flex">
                    <p class="mr-5">Pesanan No. {{ $review->order_number }}</p>
                    <svg class="w-5 h-5 text-black mt-1 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <p class="font-light">{{ $review->created_at->format('d M Y H:i') }}</p>
                    @if($review->status === 'replied')
                        <p class="text-xs ms-auto italic">has been replied</p>
                    @else
                        <p class="text-xs ms-auto italic">not been replied</p>
                    @endif
                </div>
                <div class="pemesan flex mt-5">
                    <svg class="w-5 h-5 text-gray-800 mt-1 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                    </svg>
                    <p>{{ $review->customer_name }}</p>
                    <a href="/komen" class="ms-auto">See Reviews</a>
                    <svg class="w-4 h-4 mt-1.5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m9 5 7 7-7 7"/>
                    </svg>
                </div>
            </div>
        @endforeach
        
    </div>
@endsection
