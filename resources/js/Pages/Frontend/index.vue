<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import Home from "@/Components/frontend/Home.vue";
import FitCard from "@/Components/frontend/FitnessCard.vue";
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
import Provide from "@/Components/frontend/Provide.vue";

defineProps({
       homes : Object,
       GCard : Object,
       provide : Object,
       GFooter : Object
})
</script>

<template>
  <Head title="Home" />
  <div class="">
    <FrontendLayout :GFooter="GFooter">
    
      <!-- Home Section -->
      <Home :homes ="homes"/>

      <!-- Fitness Card -->
      <FitCard :GCard="GCard"/>

      <!-- Provide  -->
      <Provide :provide="provide"/>

    </FrontendLayout>
  </div>
</template>
