<script setup>
            defineProps({
                 about : Object
            })
</script>

<template>

<section class="about bg-lime-100 min-h-[80vh] p-8">
                <div v-if="about.data.length > 0" v-for="ab in about.data" :key="ab.id"  class="grid md:grid-cols-2 items-center min-h-[80vh] gap-8">
                     <div class="">
                          <img :src="ab.image" alt="" class="rounded-3xl drop-shadow-2xl w-full h-[400px]">
                     </div>
                     <div class="">
                                    <h2 class="text-4xl font-semibold">{{ ab.title }} </h2>
                                    <p class="mt-10">
                                           {{ ab.description }}
                                    </p>
                                      <button class="bg-yellow-300 px-6 py-3 rounded-lg mt-6 ">Read More</button>

                     </div>
                </div> 
                <div v-else>
                          <h2 class="font-bold text-3xl text-center text-pink-600">No Data Found</h2>
                </div>
        </section>
</template>