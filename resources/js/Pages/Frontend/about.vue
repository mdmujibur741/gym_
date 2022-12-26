<script setup>
       import FrontendLayout from '@/Layouts/FrontendLayout.vue';
       import About from '@/Components/frontend/About.vue';
       import FitnessCard from '@/Components/frontend/FitnessCard.vue';


       defineProps({
              GCard : Object,
              about : Object,
              GFooter : Object
          })

</script>

<template>
<div>
    <FrontendLayout :GFooter="GFooter">
       
       <!-- About -->
        <About :about="about"/>
       
       <!--Fitness  Card-->
       <FitnessCard :GCard="GCard"/>
    </FrontendLayout>
</div>

</template>
