<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="text-center">
    <form action="{{ route('masuk') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="bungkus w-4/5 mx-auto my-28 p-5 bg-gradient-to-r from-slate-200 via-slate-400 to-slate-300 rounded-lg shadow-3xl">
        <h3 class="font-semibold text-xl borber border-b-2 inline-block border-black">Welcome to Toko Rumah Listrik!</h3>
        <div class="isi flex">
            <div class="kiri my-10 mx-auto">
                <img src="/logo-apk.jpg" alt="" srcset="" class="object-contain h-60 w-60 rounded-md">
            </div>
            <div class="profil w-8/12 my-auto mx-auto rounded-lg">
                <div class="email flex my-10">
                    <p>Email</p>
                    <input type="email" name="email" class="w-4/5 ms-auto rounded-md p-1 h-7">
                </div>
                <div class="password flex my-10">
                    <p>Password</p>
                    <input type="password" name="password" class="w-4/5 ms-auto rounded-md p-1 h-7">
                </div>
                <div class="action text-right text-sm mt-10">
                    <button type="submit" class="font-semibold bg-slate-400 py-1 px-3 rounded-md">Login</button>
                </div>
            </div>
        </div>
    </div>
</form>   

</body>
</html>