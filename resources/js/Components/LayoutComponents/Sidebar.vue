<template>
<div class="relative flex min-h-screen">
    <!--sidebar-->
    <div class="bg-gray-900 text-gray-50 w-64 space-y-6 px-2 py-4 absolute inset-y-0 left-0">
        <a href="" class="flex items-center space-x-2 px-4">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-10 w-10" fill="none"
            viewBox="0 0 24 24" stroke="currentColor"
            >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"
                />
            </svg><span class="text-2xl font-extrabold text-white">Nethsara</span>
        </a>

        <nav>


            <inertia-link :href="route('dashboard')" class="group flex items-center space-x-2 py-3 px-4 hover:bg-gray-400 rounded">
                <svg xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6" fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                >
                <path stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                />
                </svg><span class="text-white group-hover:text-gray-100">Dashboard1</span>
            </inertia-link>

            <a href="" class="group flex items-center space-x-2 py-3 px-4 hover:bg-gray-400 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            <span class="text-white">Invoice</span>
            </a>

            <a href="" class="group flex items-center space-x-2 py-3 px-4 hover:bg-gray-400 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                </svg><span class="text-white group-hover:text-gray-100">Bundel</span>
            </a>

            <a href="" class="group flex items-center space-x-2 py-3 px-4 hover:bg-gray-400 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg><span class="text-white group-hover:text-gray-100">User</span>
            </a>

            <a href="" class="group flex items-center space-x-2 py-3 px-4 hover:bg-gray-400 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                </svg><span class="text-white group-hover:text-gray-100">Sales1</span>
            </a>
        </nav>
    </div>

    <div class="flex-1">
        <div class="">

        </div>
    </div>
</div>
</template>

<script>

import { Inertia } from '@inertiajs/inertia'


export default {};
</script>
