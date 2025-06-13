<aside class="w-64 bg-gradient-to-b from-blue-900 to-blue-800 shadow-xl h-screen p-6 space-y-8 fixed transition-all duration-300 z-10">
    <div class="flex items-center gap-3 border-b border-blue-700 pb-6">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
        <h2 class="text-2xl font-bold text-white">Admin<span class="text-blue-300">Panel</span></h2>
    </div>

    <nav class="space-y-1">
        <a href="<?= base_url('/admin') ?>" class="flex items-center gap-3 text-blue-100 hover:text-white px-4 py-3 rounded-lg hover:bg-blue-700 transition-all group">
            <div class="w-8 h-8 bg-blue-700 group-hover:bg-blue-600 rounded-lg flex items-center justify-center transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10l9-7 9 7v10a2 2 0 01-2 2H5a2 2 0 01-2-2V10z" />
                </svg>
            </div>
            <span class="font-medium">Dashboard</span>
        </a>

        <a href="<?= base_url('admin/user') ?>" class="flex items-center gap-3 text-blue-100 hover:text-white px-4 py-3 rounded-lg hover:bg-blue-700 transition-all group">
            <div class="w-8 h-8 bg-blue-700 group-hover:bg-blue-600 rounded-lg flex items-center justify-center transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 12a4 4 0 100-8 4 4 0 000 8zm0 0v6m4-6v6m8 0v-2a4 4 0 00-3-3.87M15 12a4 4 0 100-8 4 4 0 000 8z" />
                </svg>
            </div>
            <span class="font-medium">Data User</span>
        </a>
    </nav>
</aside>