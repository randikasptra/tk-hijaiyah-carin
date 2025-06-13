 
 
 <aside class="w-64 bg-white shadow-lg h-screen p-6 space-y-6">
     <h2 class="text-2xl font-bold text-blue-700 mb-4">Admin Panel</h2>

     <nav class="space-y-2">
         <a href="<?= base_url('/admin') ?>" class="flex items-center gap-3 text-blue-700 font-semibold px-4 py-2 rounded hover:bg-blue-100 transition">
             <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10l9-7 9 7v10a2 2 0 01-2 2H5a2 2 0 01-2-2V10z" />
             </svg>
             Dashboard
         </a>

         <a  href="<?= base_url('admin/user') ?>" class="flex items-center gap-3 text-blue-700 px-4 py-2 rounded hover:bg-blue-100 transition">
             <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 12a4 4 0 100-8 4 4 0 000 8zm0 0v6m4-6v6m8 0v-2a4 4 0 00-3-3.87M15 12a4 4 0 100-8 4 4 0 000 8z" />
             </svg>
             Data User
         </a>

     </nav>
 </aside>