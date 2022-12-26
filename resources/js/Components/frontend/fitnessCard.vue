<script setup>

          defineProps({
            GCard : Object
          })

</script>

<template>
  <div class="bg-lime-100 p-6 overflow-hidden">
    <div class="grid lg:grid-cols-3 gap-5 lg:justify-center">

    <!-- Card  -->
      <div v-if="GCard.card.data.length > 0" v-for="pack in GCard.card.data.slice(0,3)" :key="pack.id" class="card bg-violet-100 hover:bg-violet-300 p-4 rounded-xl drop-shadow-2xl overflow-hidden">
        <div class="cir h-24 w-24 rounded-full bg-yellow-400  m-auto flex items-center justify-center" >
          <span class="my-auto text-xl -rotate-[30deg] text-green-800 font-bold">  {{ pack.price }}  <i class="fa-solid fa-sack-dollar"></i>  </span>
         
        </div>
        <h2 class="text-center font-bold text-xl "> {{ pack.name.toUpperCase() }} </h2>
        <p class=" text-justify">
            {{ pack.description.slice(0,130) }}
        </p>
      </div>

      <div v-else> <h2 class="font-bold text-3xl text-center"> NO DATA FOUND </h2> </div>

     

    </div>
  </div>
</template>

