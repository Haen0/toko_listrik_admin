@extends('utama.index')

@section('content')

<div class="bungkus w-4/5 my-2 mx-auto">
    <div class="py-6">
        <h1 class="text-2xl font-bold text-slate-600 border-b-2 inline-block border-slate-600">List Order</h1>
    </div>
    <div class="header flex bg-slate-200 justify-between px-4 py-2 rounded-lg shadow-md">
        <a href="{{ route('orders.index') }}"><p>All Orders</p></a>
        <a href="{{ route('orders.filter', 'New') }}"><p>New Order</p></a>
        <a href="{{ route('orders.filter', 'Ready') }}"><p>Order Ready</p></a>
        <a href="{{ route('orders.filter', 'Completed') }}"><p>Order Completed</p></a>
        <a href="{{ route('orders.filter', 'Canceled') }}"><p>Canceled</p></a>
    </div>
    <div class="subheader flex">
        <svg class="w-8 h-8 my-2 mr-1 border border-gray-500 rounded-md text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10"/>
        </svg> 
        <form class="search w-full">   
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class=" my-2 w-full px-2 py-1.5 ps-10 text-sm text-gray-900 border border-gray-500 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Orders..." required />
            </div>
        </form>
    </div>
    
    @foreach ($orders as $order)
    <div class="isi bg-slate-200 h-auto py-2 px-4 rounded-md my-4 shadow-3xl">
        <div class="atas flex text-xs">
            <p>No Pesanan {{ $order->order_number }}</p>
            <div class="waktu flex mx-4">
                <svg class="w-4 h-4 text-black dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <p>{{ $order->created_at }}</p>
            </div>
            <p class="ms-auto italic font-semibold {{ $order->status_color }}">{{ $order->status }}</p>
        </div>
        <div class="tengah my-3 flex text-sm">
            <img src="/foto.jpg" alt="" class="w-20 h-20 rounded-lg mr-9">
            <div class="produk">
                <div class="nama flex mb-1">
                    <p>Product  :</p>
                    <p class="ml-2 font-semibold">{{ $order->product_name }}</p>                         
                </div>
                <div class="harga flex my-2">
                    <p>Price    :</p>
                    <p class="ml-2 font-semibold">{{ $order->product_price }}</p>
                </div>
                <div class="qty flex my-2">
                    <p>Quantity    :</p>
                    <p class="ml-2 font-semibold">{{ $order->quantity }}</p>
                </div>
            </div>
            <p class="ms-auto italic text-xs">{{ $order->payment_method }}</p>
        </div>
        <div class="bawah flex justify-between text-sm">
            <div class="orang flex">
                <svg class="w-5 h-5 mr-0.5 text-black dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z" clip-rule="evenodd"/>
                </svg>                                           
                <p class="font-semibold">{{ $order->customer_name }}</p>
            </div>
            <p class="font-semibold">Total    :   {{ $order->total }}</p>
        </div>
        @if($order->status == 'Menunggu Tanggapan Penjual')
        <div class="action text-right text-sm mt-2">
            <button class="font-semibold bg-slate-400 py-1 px-3 rounded-md">Accept</button>
            <button class="font-semibold bg-red-500 py-1 px-3 rounded-md">Reject</button>
        </div>
        @elseif($order->status == 'Ready For Pickup')
        <div class="action text-right text-sm mt-2">
            <button class="font-semibold bg-green-500 py-1 px-3 rounded-md">Already Taken</button>
        </div>
        @endif
    </div>
    @endforeach
</div>
@endsection
