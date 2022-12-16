<script setup>
         import FrontendLayout from '@/Layouts/FrontendLayout.vue';
         import Contact from '@/Components/frontend/Contact.vue';
         import FitnessCard from '@/Components/frontend/FitnessCard.vue';
</script>

<template>
     <div class="min-h-[30vh] bg-indigo-400">
              <FrontendLayout>
              <!-- Contact Section  -->
                     <Contact/>

                     <!-- Fitness Promote -->
                     <FitnessCard/>
              </FrontendLayout> 
     </div>
</template>