<div class="min-h-full">
  <nav class="bg-slate-600">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <a href="/dashboard" class="nav-link text-gray-300 hover:text-white px-3 py-2 text-sm font-semibold" aria-current="page">Dashboard</a>
              <a href="/produk" class="nav-link text-gray-300 hover:text-white px-3 py-2 text-sm font-semibold">Product</a>
              <a href="/order" class="nav-link text-gray-300 hover:text-white px-3 py-2 text-sm font-semibold">Order</a>
              <a href="/review" class="nav-link text-gray-300 hover:text-white px-3 py-2 text-sm font-semibold">Review</a>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <a href="/notif" type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
            </a>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true" onclick="toggleDropdown()">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Buka menu pengguna</span>
                  <img class="h-8 w-8 rounded-full" src="{{ asset('storage/logos/' . Auth::user()->logo) }}" alt="Logo Toko">
                </button>
              </div>
            
              <div id="dropdown-menu" class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <a href="/profile" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Setting Your Profile</a>
                <a href="/toko" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Setting Your Store</a>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign Out</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:border-b-2 border-black hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false" onclick="toggleMobileMenu()">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-semibold" aria-current="page">Dashboard</a>
        <a href="#" class="text-gray-300 hover:border-b-2 border-black hover:text-white block rounded-md px-3 py-2 text-base font-semibold">Project</a>
        <a href="#" class="text-gray-300 hover:border-b-2 border-black hover:text-white block rounded-md px-3 py-2 text-base font-semibold">Order</a>
        <a href="#" class="text-gray-300 hover:border-b-2 border-black hover:text-white block rounded-md px-3 py-2 text-base font-semibold">Review</a>
        <a href="#" class="text-gray-300 hover:border-b-2 border-black hover:text-white block rounded-md px-3 py-2 text-base font-semibold">Reports</a>
      </div>
      <div class="border-t border-gray-700 pb-3 pt-4">
        <div class="flex items-center px-5">
          <div class="flex-shrink-0">
            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base font-semibold leading-none text-white">Tom Cook</div>
            <div class="text-sm font-semibold leading-none text-gray-400">tom@example.com</div>
          </div>
          <button type="button" class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
            </svg>
          </button>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-semibold text-gray-400 hover:border-b-2 border-black hover:text-white">Your Profile</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-semibold text-gray-400 hover:border-b-2 border-black hover:text-white">Settings</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-semibold text-gray-400 hover:border-b-2 border-black hover:text-white">Sign out</a>
        </div>
      </div>
    </div>
  </nav>
</div>

<script>
  function toggleDropdown() {
    const dropdown = document.getElementById('dropdown-menu');
    dropdown.classList.toggle('hidden');
  }

  function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
  }

  document.addEventListener('click', function(event) {
    const dropdown = document.getElementById('dropdown-menu');
    const button = document.getElementById('user-menu-button');
    if (!button.contains(event.target) && !dropdown.contains(event.target)) {
      dropdown.classList.add('hidden');
    }
  });
  document.querySelectorAll('.nav-link').forEach(link => {
      link.addEventListener('click', function() {
        // Remove 'active' class from all nav-links
        document.querySelectorAll('.nav-link').forEach(navLink => {
          navLink.classList.remove('active');
        });
        // Add 'active' class to the clicked nav-link
        this.classList.add('active');
      });
    });
</script>