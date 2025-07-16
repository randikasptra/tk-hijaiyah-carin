<header class="bg-white shadow px-6 py-4 flex justify-between items-center">

    <a href="<?= base_url('/logout') ?>"
       class="inline-flex items-center bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md font-medium shadow transition ml-auto">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1m0-10V5" />
        </svg>
        Logout
    </a>
</header>


<header class="bg-white shadow-sm px-8 py-4 flex justify-between items-center fixed left-64 right-0 z-10">
    <div class="flex-1"></div>
    
    <div class="flex items-center space-x-4">
       
        
        <a href="<?= base_url('/logout') ?>" class="inline-flex items-center bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-md font-medium shadow-md transition-all transform hover:-translate-y-0.5">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1m0-10V5" />
            </svg>
            Logout
        </a>
    </div>
</header>