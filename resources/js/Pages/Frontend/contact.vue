<script setup>
         import FrontendLayout from '@/Layouts/FrontendLayout.vue';
         import Contact from '@/Components/frontend/Contact.vue';
         import FitnessCard from '@/Components/frontend/FitnessCard.vue';

         defineProps({
              GFooter : Object,
              GCard : Object
          })
</script>

<template>
     <div class="min-h-[30vh] bg-indigo-400">
              <FrontendLayout :GFooter="GFooter">
              <!-- Contact Section  -->
                     <Contact />

                     <!-- Fitness Promote -->
                     <FitnessCard :GCard="GCard"/>
              </FrontendLayout> 
     </div>
</template>