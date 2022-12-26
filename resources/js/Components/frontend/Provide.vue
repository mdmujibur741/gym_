<script setup>
                defineProps({
                     provide : Object
                })
</script>

<template>
         <section class="bg-blue-900 min-h-[85vh] text-white p-4 ">
                   <div v-if="provide.data.length > 0" v-for="pro in provide.data" :key="pro.id" class="grid lg:grid-cols-2 items-center gap-8 min-h-[85vh]">
                         <div class="uppercase font-bold mx-auto">
                            <h2 class="text-6xl my-6"> {{ pro.title_1stLine }} <br> {{ pro.title }} </h2>
                            <h3 class="text-3xl my-4"><i class="fa-solid fa-check"></i> {{ pro.point_one }} </h3>
                            <h3 class="text-3xl my-4"><i class="fa-solid fa-check"></i> {{ pro.point_two }}</h3>
                            <h3 class="text-3xl my-4"><i class="fa-solid fa-check"></i> {{ pro.point_three }}</h3>
                              <h3 class="text-3xl my-4"><i class="fa-solid fa-check"></i> {{ pro.point_four }} </h3>
                                <button class="bg-yellow-300 px-7 py-3 rounded-xl text-black mt-8">See More</button>
                         </div>

                         <div class="text-center">
                                 <img :src="pro.image" alt="provide" class="rounded-xl">
                         </div>
                   </div>
                   <div v-else> <h2 class="font-bold text-3xl text-center">NO DATA FOUND</h2> </div>
         </section>
 
</template>