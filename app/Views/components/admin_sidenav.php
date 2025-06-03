 
 
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
             Data Siswa
         </a>

         <a href="#" class="flex items-center gap-3 text-blue-700 px-4 py-2 rounded hover:bg-blue-100 transition">
             <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16h8M8 12h8m-6 8h6a2 2 0 002-2v-6a2 2 0 00-2-2h-6a2 2 0 00-2 2v6a2 2 0 002 2z" />
             </svg>
             Rekap Nilai
         </a>

         <a href="#" class="flex items-center gap-3 text-blue-700 px-4 py-2 rounded hover:bg-blue-100 transition">
             <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18m-9 5h9" />
             </svg>
             Kelola Soal
         </a>
     </nav>
 </aside>