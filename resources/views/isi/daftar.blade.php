<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('simpan.daftar') }}" method="POST" enctype="multipart/form-data" class="w-3/5 mx-auto bg-slate-200 p-5 my-10 rounded-lg shadow-3xl">
        @csrf
        <div class="atas border-b-2 border-black pb-2">
            <h2 class="text-xl font-semibold leading-7 text-gray-900 text-center">Welcome To Rumah Toko Listrik!</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600 text-center">"Selamat datang di halaman admin Toko Rumah Listrik!  Silahkan daftarkan toko anda dan kelola toko Anda dengan mudah dan efisien di sini."</p>
        </div>
        <div class="mt-10">
            <h2 class="font-semibold leading-7 text-gray-900">Your Store</h2>
            <p class="mt-1 text-sm font-light leading-6 text-gray-600">Silahkan isi dan lengkapi data toko kamu</p>
    
            <div class="col-span-full mt-3">
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name Store</label>
                <div class="mt-1 mb-5">
                    <input type="text" required name="name" id="name" placeholder="nama toko kamu..." autocomplete="name" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 sm:text-sm sm:leading-6">
                </div>
            </div>
    
            <div class="col-span-full">
                <label for="about" class="block text-sm font-medium leading-6 text-gray-900">About</label>
                <div class="mt-1 mb-5">
                    <textarea id="about" required name="about" rows="3" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 sm:text-sm sm:leading-6" placeholder="deskripsikan toko kamu.."></textarea>
                </div>
            </div>
    
                <div class="col-span-full">
                    <label for="logo" class="block text-sm font-medium leading-6 text-gray-900">Logo Toko</label>
                    <div class="mt-1 mb-5 flex justify-center rounded-lg border border-dashed border-black px-6 py-10">
                        <div class="text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-500" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                            </svg>
                            <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                <label for="file-upload" class="relative cursor-pointer rounded-md font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                    <span>Upload a file</span>
                                    <input type="file" name="logo" id="file-upload" autocomplete="logo" class="sr-only" required>
                                </label>
                            <p class="ms-1">or drag and drop</p>
                            </div>
                            <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                        </div>
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Street address</label>
                    <div class="mt-1 mb-5">
                        <input type="text" required name="street" id="street" autocomplete="street" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </div>
        </div>
    
        <div class="border-b border-gray-900/10 mt-10">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Your Profile</h2>
            <p class="mt-1 text-sm font-light leading-6 text-gray-600">Silahkan isi dan lengkapi data diri kamu</p>

    
            <div class="sm:col-span-3 mt-3">
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Your name</label>
                <div class="mt-1 mb-5">
                    <input type="text" required name="owner" id="owner" autocomplete="owner" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <div class="mt-1 mb-5">
                    <input id="email" required name="email" type="email" autocomplete="email" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 sm:text-sm sm:leading-6">
                </div>
            </div>
    
            <div class="sm:col-span-3">
                <label for="notelp" class="block text-sm font-medium leading-6 text-gray-900">No Telp</label>
                <div class="mt-1 mb-5">
                    <input type="tel" required name="phone" id="phone" autocomplete="phone" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 sm:text-sm sm:leading-6">
                </div>
            </div>
            
            <div class="sm:col-span-3">
                <label for="pass" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                <div class="mt-1 mb-5 relative">
                    <input type="password" required name="password" id="password" autocomplete="new-password" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 sm:text-sm sm:leading-6">
                    <button type="button" onclick="togglePasswordVisibility('pass', 'togglePass')" class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                        <svg id="togglePass" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        </svg>
                    </button>
                </div>
            </div>
        
            <div class="sm:col-span-3">
                <label for="conpass" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
                <div class="mt-1 mb-5 relative">
                    <input type="password" required name="password" id="password" autocomplete="new-password" class="p-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 sm:text-sm sm:leading-6">
                    <button type="button" onclick="togglePasswordVisibility('conpass', 'toggleConpass')" class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                        <svg id="toggleConpass" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        </svg>                          
                    </button>
                </div>
            </div>
            
    
        <div class="mt-6 flex items-center justify-end">
            <button type="button" class="text-sm font-semibold leading-6 text-red-500">Cancel</button>
            <button type="submit" class="rounded-md bg-slate-600 px-3 py-1 mx-2 text-sm font-semibold text-white">Save</button>
        </div>
    </form>   

    <script>
        function togglePasswordVisibility(inputId, toggleId) {
            const input = document.getElementById(inputId);
            const toggle = document.getElementById(toggleId);

            if (input.type === "password") {
                input.type = "text";
                toggle.innerHTML = `
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                `;
            } else {
                input.type = "password";
                toggle.innerHTML = `
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <!-- Eye Icon -->
                        <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                        <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                `;
            }
        }
    </script>
</body>
</html>