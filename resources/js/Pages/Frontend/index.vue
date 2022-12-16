<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import Home from "@/Components/frontend/Home.vue";
import FitCard from "@/Components/frontend/FitnessCard.vue";
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
import Provide from "@/Components/frontend/Provide.vue";
</script>

<template>
  <Head title="Home" />
  <div class="">
    <FrontendLayout>
    
      <!-- Home Section -->
      <Home />

      <!-- Fitness Card -->
      <FitCard />

      <!-- Provide  -->
      <Provide />

    </FrontendLayout>
  </div>
</template>
