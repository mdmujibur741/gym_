<script setup>
import { ref } from "vue";
import DashNav from "@/Components/DashNav.vue";

</script>

<template>
  <div>
    <div class="min-h-screen bg-gray-100">
      <div class="grid lg:grid-cols-6 md:grid-cols-5">
        <!--Dash  Side  Nav -->
        <div class="md:min-h-screen shadow-md bg-white px-1 pt-12">
            <DashNav/>  
        </div>
        <div class="lg:col-span-5 md:col-span-4 min-w-screen">
          <main>
            <slot />
          </main>
        </div>
      </div>
    </div>
  </div>
</template>


<style scoped>
       .active{
                 background: #1D4ED8;  
                 color: azure;
                
       }
</style>
