<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import TopNav from '@/Components/frontend/TopNav.vue';
import Home from '@/Components/frontend/Home.vue'
import FitCard from '@/Components/frontend/fitnessCard.vue';
import Footer from '@/Components/frontend/Footer.vue';
import FrontendLayout from '@/Layouts/FrontendLayout.vue';

</script>

<template>
<div class="">
  <FrontendLayout>
  
   <!-- Home Section -->
    <Home/>

    <!-- Fitness Card -->
     <FitCard/>

    </FrontendLayout>

</div>

  

    
</template>
