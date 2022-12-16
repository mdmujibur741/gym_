<script setup>

import { Link } from '@inertiajs/inertia-vue3';

</script>

<template>
    <div class="bg-blue-100">
           <div class="home flex items-center">
                  <div class="new text-white">
                    <h1 class="font-bold text-center text-7xl">The healthy <br> way of life company</h1>
                    <p class="text-justify p-6">
                     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem vel autem odio laboriosam molestias, quae eveniet, ea maxime ab quod omnis provident recusandae asperiores praesentium sed mollitia pariatur nisi unde?
                    </p>

                   <div class="flex justify-center">
                    <Link :href="route('web.contact')" class="bg-yellow-300 px-7 py-3 rounded-xl text-black drop-shadow-2xl"> <b>Contact Us</b> </Link></div>
                 </div>
           </div>
    </div>
</template>



<style scoped>

   .home{
         min-height: 80vh;
         background-image: linear-gradient(135deg, rgba(68, 0, 255, 0.4) 60%, rgba(106, 0, 255, 0.6)),url('../../../../public/storage/image/home.jpg');
         background-repeat: no-repeat;
         background-size: cover;
         background-position: center;
   }
 


</style>