<script setup>
        import { Link } from '@inertiajs/inertia-vue3';
        defineProps({
             GFooter : Object
        })
</script>

<template>
  <div class="min-h-[20vh] bg-gray-200 p-7">
       <div v-for="fo in GFooter.footer.data" :key="fo.id" class="grid md:grid-cols-3 gap-4 items-center lg:h-64 px-8">
           
                <div class="mb-3">
                  <h2 class="text-center text-3xl mb-6 text-semibold">ABOUT</h2>
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolorum, architecto libero, expedita, deleniti eligendi.
                  </p>
              </div>
       
             
                <div class="mb-3">
                  <h2 class="text-3xl mb-6 text-semibold">ADDRESS</h2>
                 <p> Address: {{ fo.address }} </p>
                  <p>Tel: {{ fo.phone }} </p>
                <p>Email: {{ fo.email }} </p>
                 <div class="flex gap-5 justify-start my-5">
                    <p> <a :href="fo.facebook"><i class="fa-brands fa-facebook  fa-2xl text-blue-900"></i></a> </p>
                    <p> <a :href="fo.twitter"><i class="fa-brands fa-square-twitter fa-2xl text-blue-900"></i></a> </p>
                    <p> <a :href="fo.instagram"><i class="fa-brands fa-instagram fa-2xl text-blue-900"></i></a> </p>
                    <p> <a :href="fo.youtube"><i class="fa-brands fa-youtube fa-2xl text-blue-900"></i></a> </p>
                    <p> <a :href="fo.linkedin"><i class="fa-brands fa-linkedin fa-2xl text-blue-900"></i></a> </p> 
                </div>
              </div>


              <div class="mb-3">
                  <h2 class="text-3xl mb-6 text-semibold"> OUR TIMING </h2>
                   
               <p> Monday   {{ fo.op_time }} - {{ fo.cl_time }}</p>
               <p> Tuesday  {{ fo.op_time }} - {{ fo.cl_time }}</p>
               <p> Thursday  {{ fo.op_time }} - {{ fo.cl_time }}</p>
               <p> Friday   {{ fo.op_time }} - {{ fo.cl_time }}</p>
               <p> Saturday  {{ fo.op_time }} - {{ fo.cl_time }}</p>
               <p> Sunday CLOSED</p>

              </div>
              
       </div>
  </div>
</template>
