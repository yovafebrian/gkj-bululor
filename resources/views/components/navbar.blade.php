<style>
    #navbar {
        transition: background-color 0.3s ease;
    }
</style>
<nav id="navbar" class="fixed top-0 left-0 w-full bg-transparent backdrop-blur-md z-50 transition-colors duration-300">
    <div class="container  flex justify-between items-center p-4">
        <!-- Logo -->
        <a href="/" class="flex items-center text-xl font-bold text-blue-600 dark:text-white transition-all duration-300 hover:scale-[1.02] space-x-2">
            <img src="{{ asset('images/logo_gkj.png') }}" alt="Logo gkj bulu lor" class="h-10 w-auto object-contain">
            <span>GKJ BULU LOR SEMARANG</span>
        </a>
        
        <!-- icon dark and light -->
        <div class="flex items-center space-x-4">
            <!-- Theme Toggle -->
            <button onclick="toggleTheme()" class="theme-toggle p-2 rounded-full   text-gray-800 dark:text-gray-200   transition-colors duration-300">
            </button>
            
            <!-- Mobile Menu Button -->
            <button id="menu-button" class="md:hidden text-gray-700 dark:text-gray-300 focus:outline-none" aria-expanded="false" aria-controls="menu">
                <svg id="menu-icon" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg id="close-icon" class="w-8 h-8 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Desktop Menu -->
        <div id="menu" class="hidden md:flex items-center">
            <ul class="flex flex-col md:flex-row md:space-x-6 absolute md:relative top-full left-0 w-full md:w-auto bg-white  md:bg-transparent shadow-lg md:shadow-none md:static transition-colors duration-300">
                <li><a href="/home" class="block py-2 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">Beranda</a></li>
                <li><a href="/kegiatan" class="block py-2 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">Tentang Kami</a></li>

                <!-- Profile Dropdown -->
                <li class="relative group">
                    <button class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">
                        Profile
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <ul class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-700 shadow-lg rounded-md py-1 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2">
                        <li><a href="/profile" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors"></a></li>
                        <li><a href="https://instagram.com" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">test</a></li>
                        <li><a href="/" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">test</a></li>
                    </ul>
                </li>

                <!-- Akademik Dropdown -->
                <li class="relative group">
                    <button class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">
                        Akademik
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <ul class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-700 shadow-lg rounded-md py-1 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2">
                        <li><a href="/tugas-daring" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">test</a></li>
                    </ul>
                </li>
                <li><a href="" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-blue-50 dark:hover:bg-gray-600 transition-colors">Ibadah & Jadwal </a></li>
                <!-- Dropdown Kontak -->
                <li class="relative group">
                    <button class="flex items-center py-2 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">
                        Kontak Kami 
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <ul class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-700 shadow-lg rounded-md py-1 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2">
                        <li><a href="/kontak" class="block py-2 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">Kontak</a></li>
                        <li><a href="/saran" class="block py-2 px-4 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">Saran & Kritik</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY === 0) {
            navbar.classList.remove('bg-black', 'bg-black/80');
            navbar.classList.add('bg-transparent');
        } else {
            navbar.classList.remove('bg-transparent');
            navbar.classList.add('bg-black/80'); // hitam semi transparan
        }
    });
</script>
