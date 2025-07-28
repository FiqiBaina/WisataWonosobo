<!-- Include Alpine.js -->
<script src="https://unpkg.com/alpinejs" defer></script>

<style>
  /* === DESKTOP === */
  nav.navbar-custom {
    background-color: rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(16px);
    border-radius: 50px;
    padding: 0.3rem 1rem;
    width: 828px;
    margin: 30px auto;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    position: fixed;
    left: 0;
    right: 0;
    z-index: 1000;
    height: 38px;
  }

  #menuItems a.nav-link {
    color: white !important;
    font-weight: 500;
    font-size: 12px;
    transition: color 0.3s;
    white-space: nowrap;
  }

  #menuItems a.nav-link:hover,
  #menuItems a.nav-link.active {
    color: #d1d5db !important;
  }

  #searchIcon {
    color: white;
    font-size: 1.3rem;
    background: none;
    border: none;
    cursor: pointer;
    flex-shrink: 0;
  }

  .search-form-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 828px;
    height: 38px;
    background-color: white;
    border-radius: 50px;
    display: flex;
    align-items: center;
    padding: 0 1rem;
    gap: 0.5rem;
    box-sizing: border-box;
    box-shadow: 0 4px 10px rgb(0 0 0 / 0.15);
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.3s ease;
    z-index: 1100;
  }

  .search-form-container.active {
    opacity: 1;
    pointer-events: auto;
  }

  #searchInput {
    border: none;
    outline: none;
    font-size: 1rem;
    flex-grow: 1;
    background: transparent;
    padding: 0.5rem 0.75rem;
    border-radius: 50px;
    color: #1f2937;
    font-weight: 500;
    user-select: text;
  }

  #closeSearch {
    font-size: 1.4rem;
    color: #374151;
    cursor: pointer;
    flex-shrink: 0;
    user-select: none;
    padding: 0.1rem;
  }

  /* === MOBILE === */
  @media (max-width: 768px) {
    nav.navbar-custom {
      background-color: transparent;
      backdrop-filter: none;
      width: 100%;
      height: auto;
      flex-direction: column;
      align-items: flex-start;
      padding: 0.5rem 1rem;
    }

    .mobile-menu-container {
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .mobile-menu-button {
      display: block;
      color: white;
      font-size: 1.5rem;
      background-color: rgba(27, 31, 39, 0.61);
      backdrop-filter: blur(16px);
      border: none;
      cursor: pointer;
      border-radius: 5px;
      padding: 4px 8px;
      position:relative;
      left:10rem;
      bottom:1rem;
      z-index: 10;
    }


    #menuItems {
      display: none !important;
      flex-direction: column;
      width: 25rem;
      gap: 0.75rem;
      margin-top: 1rem;
      background-color: #1B1F27;
      border-radius: 10px;
      padding: 1rem;
      position: relative;
      right:3rem;
      bottom:4rem;
      height:22rem;
      padding-top: 100px;
    }

    .icon-img{
     left:1rem;
    }

    .bi-x{
      position: absolute;
      right:14rem;
      z-index: 20;
    }

    #menuItems.show {
      display: flex !important;
    }

    #menuItems a.nav-link {
      font-size: 14px;
    }

    .search-form-container {
      width: 100%;
      left: 50%;
      transform: translateX(-50%);
    }
  }
</style>

<nav class="navbar navbar-expand-lg navbar-custom" x-data="{ isOpen: false }">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row items-start md:items-center justify-between w-full">

      <!-- Logo Desktop -->
      <img class="w-[87px] hidden md:block" src="{{ asset('images/logonavbar.png') }}" alt="logo">

      <!-- Mobile Header -->
      <div class="mobile-menu-container md:hidden  relative">
        <!-- Logo Mobile muncul hanya saat menu terbuka -->
        <img class="w-[87px] z-30 absolute icon-img " src="{{ asset('images/logonavbar.png') }}" alt="logo" x-show="isOpen" x-transition>
        <button class="mobile-menu-button ml-auto absolute" @click="isOpen = !isOpen">
          <i class="bi" :class="isOpen ? 'bi-x' : 'bi-list'"></i>
        </button>
      </div>

      <!-- Menu Items -->
      <div id="menuItems" :class="{ 'show': isOpen }"
        class="ml-0 md:ml-10 flex items-baseline space-x-4 md:space-x-4 md:flex-row flex-col">
        <x-nav-link href="/" :active="request()->is('/')" @click="isOpen = false">Beranda</x-nav-link>
        <x-nav-link href="/wisata" :active="request()->is('wisata')" @click="isOpen = false">Wisata</x-nav-link>
        <x-nav-link href="/acara" :active="request()->is('acara')" @click="isOpen = false">Acara</x-nav-link>

        <div x-data="{ layananOpen: false }" class="relative">
          <button @click="layananOpen = !layananOpen" type="button"
            class="text-white font-semibold px-3 py-2 rounded-md flex items-center gap-1" style="font-size: 12px;">
            Layanan
            <svg class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': layananOpen }"
              fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </button>

          <div x-show="layananOpen"
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute z-20 mt-2 w-48 rounded-md shadow-lg bg-white/30 backdrop-blur-md ring-1 ring-black ring-opacity-5"
            @click.away="layananOpen = false">
            <x-nav-link href="/pemanduwisata" :active="request()->is('pemanduwisata')" class="block px-4 py-2 text-sm text-white">Pemandu Wisata</x-nav-link>
            <x-nav-link href="/birotransportasi" :active="request()->is('birotransportasi')" class="block px-4 py-2 text-sm text-white">Biro Transportasi</x-nav-link>
            <x-nav-link href="/faq" :active="request()->is('faq')" class="block px-4 py-2 text-sm text-white">FAQ</x-nav-link>
          </div>
        </div>

        <x-nav-link href="/hubungi" :active="request()->is('hubungi')" @click="isOpen = false">Hubungi</x-nav-link>
      </div>

      <!-- Search (desktop only) -->
      <div class="hidden md:block ml-4 flex items-center md:ml-6">
        <button id="searchIcon" aria-label="Buka Pencarian">
          <i class="bi bi-search"></i>
        </button>
        <form action="{{ route('hasilpencarian') }}" method="GET" id="searchFormTag" class="search-form-container">
          <input type="text" id="searchInput" name="query" placeholder="Cari tempat wisata..." required>
          <i id="closeSearch" class="bi bi-x-lg" aria-label="Tutup Pencarian" role="button" tabindex="0"></i>
          <button type="submit"></button>
        </form>
      </div>

    </div>
  </div>
</nav>

<script>
  const searchIcon = document.getElementById("searchIcon");
  const closeSearch = document.getElementById("closeSearch");
  const searchForm = document.getElementById("searchFormTag");
  const menuItems = document.getElementById("menuItems");
  const searchInput = document.getElementById("searchInput");

  searchIcon.addEventListener("click", () => {
    searchForm.classList.add("active");
    menuItems.style.display = "none";
    searchIcon.style.display = "none";
    searchInput.value = "";
    searchInput.focus();
  });

  function closeSearchFunc() {
    searchForm.classList.remove("active");
    menuItems.style.display = "flex";
    searchIcon.style.display = "inline-block";
  }

  closeSearch.addEventListener("click", closeSearchFunc);

  document.addEventListener("click", (e) => {
    if (!searchForm.contains(e.target) && !searchIcon.contains(e.target)) {
      closeSearchFunc();
    }
  });
</script>
