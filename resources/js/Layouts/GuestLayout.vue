<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 ">
        <div class="text-center my-10 bg-gray-100 px-10 py-3 rounded-full drop-shadow-xl ">
            <Link href="/" class="text-3xl text-blue-600">
               
                    
                 <i class="fa-solid fa-dumbbell "></i>  
              
                  GYM
            </Link>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-100 drop-shadow-2xl overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
