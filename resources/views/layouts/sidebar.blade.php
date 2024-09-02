@php
    $currentRoute = Route::currentRouteName();
@endphp

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
        <ul class="space-y-2 font-medium">
            <li class="">
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group @if($currentRoute == 'dashboard') bg-gray-100 @endif">
                    <i class='bx bxs-dashboard w-7 h-7 text-2xl text-gray-500 transition duration-75 group-hover:text-gray-900'
                        aria-hidden="true"></i>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-1.5 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100"
                    aria-controls="dropdown-menu" data-collapse-toggle="dropdown-menu">
                    <i class='bx bxs-dashboard w-7 h-7 text-2xl text-gray-500 transition duration-75 group-hover:text-gray-900'
                        aria-hidden="true"></i>
                    <span class="flex-1 ms-3.5 text-left rtl:text-right whitespace-nowrap">Configuration</span>
                    <i class='bx bx-chevron-down w-7 h-8 text-3xl' aria-hidden="true"></i>
                </button>
                <ul id="dropdown-menu" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Products</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Billing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Invoice</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <i class='bx bxs-user w-7 h-7 text-2xl text-gray-500 transition duration-75 group-hover:text-gray-900'
                        aria-hidden="true"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <i class='bx bxs-shopping-bag w-7 h-7 text-2xl text-gray-500 transition duration-75 group-hover:text-gray-900'
                        aria-hidden="true"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
