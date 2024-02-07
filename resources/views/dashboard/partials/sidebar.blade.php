<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
    type="button"
    class="inline-flex items-center p-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 mt-24">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>
<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 mt-24 md:mt-24"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800 rounded-lg">
        <ul class="space-y-2 font-medium">
            <a href="/">
                <div class="font-bold text-white flex mx-auto bg-blue-300 py-2 px-4 rounded-md hover:bg-blue-500"><small
                        class="font-Mont"><i class="fa-solid fa-arrow-left pr-2"></i>BACK TO HOME</small></div>
            </a>
            <li>
                <a href="/dashboard"
                    class="flex items-center p-2  rounded-md {{ Request::is('dashboard') ? 'text-gray-500 bg-gray-200 hover:bg-gray-400' : 'text-gray-900 hover:bg-gray-100' }} dark:text-white  dark:hover:bg-gray-700 group">
                    <span class="ms-3 font-Mont font-bold"><i class="fa-solid fa-table-columns"></i> DASHBOARD</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/data-pinjam"
                    class="flex items-center p-2  rounded-md {{ Request::is('dashboard/data-pinjam') ? 'text-gray-500 bg-gray-200 hover:bg-gray-400' : 'text-gray-900 hover:bg-gray-100' }} dark:text-white  dark:hover:bg-gray-700 group">
                    <span class="ms-3 font-Mont font-bold"><i class="fa-solid fa-book"></i> PEMINJAMAN</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/riwayat"
                    class="flex items-center p-2  rounded-md {{ Request::is('dashboard/riwayat') ? 'text-gray-500 bg-gray-200 hover:bg-gray-400' : 'text-gray-900 hover:bg-gray-100' }} dark:text-white  dark:hover:bg-gray-700 group">
                    
                    <span class="flex-1 ms-3 whitespace-nowrap font-Mont font-bold"><i class="fa-solid fa-clock-rotate-left"></i> RIWAYAT</span>
                </a>
            </li>
            {{-- @can('admin') --}}
            @if (Auth::user())
                @if (Auth::user()->role_id != 3)
                    <div class=" font-bold text-white flex mx-auto justify-center bg-slate-400 py-2 rounded-md"><small
                            class="text-center font-Mont"><i class="fa-solid fa-person"></i> PETUGAS</small></div>
                    <a href="/dashboard/data-buku"
                        class="flex items-center p-2  rounded-md {{ Request::is('dashboard/data-buku') ? 'text-gray-500 bg-gray-200 hover:bg-gray-400' : 'text-gray-900 hover:bg-gray-100' }} dark:text-white  dark:hover:bg-gray-700 group">
                        <span class="flex-1 ms-3 whitespace-nowrap font-Mont font-bold"><i class="fa-solid fa-database"></i> DATA BUKU</span>
                    </a>
                    <a href="/dashboard/data-peminjaman"
                        class="flex items-center p-2  rounded-md {{ Request::is('dashboard/data-peminjaman') ? 'text-gray-500 bg-gray-200 hover:bg-gray-400' : 'text-gray-900 hover:bg-gray-100' }} dark:text-white  dark:hover:bg-gray-700 group">
                        <span class="flex-1 ms-3 whitespace-nowrap font-Mont font-bold"><i class="fa-solid fa-database"></i> DATA PEMINJAMAN</span>
                    </a>
                    <a href="/dashboard/data-riwayat"
                        class="flex items-center p-2  rounded-md {{ Request::is('dashboard/data-riwayat') ? 'text-gray-500 bg-gray-200 hover:bg-gray-400' : 'text-gray-900 hover:bg-gray-100' }} dark:text-white  dark:hover:bg-gray-700 group">
                        <span class="flex-1 ms-3 whitespace-nowrap font-Mont font-bold"><i class="fa-solid fa-clock-rotate-left"></i> SEMUA RIWAYAT</span>
                    </a>
                    @if (Auth::user()->role_id == 1)
                        <div class="flex mx-auto justify-center bg-yellow-200 py-2 rounded-md"><small
                                class="text-center font-Mont "><i class="fa-solid fa-crown"></i> ADMIN</small></div>
                                <a href="/dashboard/data-user"
                                class="flex items-center p-2  rounded-md {{ Request::is('dashboard/data-user') ? 'text-gray-500 bg-gray-200 hover:bg-gray-400' : 'text-gray-900 hover:bg-gray-100' }} dark:text-white  dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap font-Mont font-bold"><i class="fa-solid fa-user"></i> DATA USER</span>
                            </a>
                                <a href="/dashboard/admin/kelas"
                                class="flex items-center p-2  rounded-md {{ Request::is('dashboard/admin/kelas') ? 'text-gray-500 bg-gray-200 hover:bg-gray-400' : 'text-gray-900 hover:bg-gray-100' }} dark:text-white  dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap font-Mont font-bold"><i class="fa-solid fa-user"></i> DATA KELAS</span>
                            </a>
                                <a href="/dashboard/admin/addcategory"
                                class="flex items-center p-2  rounded-md {{ Request::is('dashboard/admin/addcategory') ? 'text-gray-500 bg-gray-200 hover:bg-gray-400' : 'text-gray-900 hover:bg-gray-100' }} dark:text-white  dark:hover:bg-gray-700 group">
                                <span class="flex-1 ms-3 whitespace-nowrap font-Mont font-bold"><i class="fa-solid fa-user"></i> DATA CATEGORY</span>
                            </a>
                    @endif
                @endif
            @else
            @endif
        </ul>
    </div>
</aside>
