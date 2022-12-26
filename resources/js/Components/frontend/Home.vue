<script setup>

import { Link } from '@inertiajs/inertia-vue3';
defineProps({
         homes : Object
})

</script>

<template>
    <div class="bg-blue-100">
         <div v-if="homes.data.length > 0">
            <div v-for="hom in homes.data" :key="hom.id" class="home flex items-center min-h-[80vh] bg-no-repeat bg-cover bg-center"  :style="{ 'background-image': 'linear-gradient(rgba(0, 0, 255, 0.7), rgba(0, 0, 71, 0.8)), url(' + hom.image + ')' }">
                  <div class="new text-white p-6">
                    <div class="p-10">
                        <h1 class="font-bold text-center text-7xl" style="white-space: pre-line;"> {{ hom.title }} </h1>
                    <p class="text-justify p-6">
                          {{ hom.description }}
                    </p>

                    </div>
                   <div class="flex justify-center">
                    <Link :href="route('web.contact')" class="bg-yellow-300 px-7 py-3 rounded-xl text-black drop-shadow-2xl"> <b>Contact Us</b> </Link></div>
                 </div>
           </div>
         </div>

         <div v-else>
            <div class="new text-white p-6">
                    <div class="p-10">
                        <h1 class="font-bold text-center text-7xl"> This Is Demo Default Title </h1>
                    <p class="text-justify p-6">
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis placeat nostrum itaque sunt, pariatur blanditiis.
                    </p>

                    </div>
                   <div class="flex justify-center">
                    <Link :href="route('web.contact')" class="bg-yellow-300 px-7 py-3 rounded-xl text-black drop-shadow-2xl"> <b>Contact Us</b> </Link></div>
                 </div>
         </div>

          
          
    </div>
</template>



