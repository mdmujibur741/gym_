<script setup>
         import TopNav from '@/Components/frontend/TopNav.vue';
         import Footer from '@/Components/frontend/Footer.vue';


         defineProps({
                GFooter : Object
         })
</script>

<template>
        <div class="min-h-screen bg-gray-300">
                   <!-- Top Nav -->
                   <TopNav/>

                      <!-- Main Content -->
                    <main>
                       <slot />
                     </main>
                   <!-- Footer -->
                   <Footer :GFooter="GFooter"/>
        </div>
</template>