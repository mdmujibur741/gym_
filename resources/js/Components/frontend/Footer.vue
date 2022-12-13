<script setup>
        import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
  <div class="lg:h-auto md:min-h-fit bg-gray-200">
       <div class="grid lg:grid-cols-3 md:grid-cols-6 gap-4 items-center lg:h-64 px-8">
           
                <div class="mb-3">
                  <h2 class="text-center text-3xl mb-6 text-semibold">ABOUT</h2>
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolorum, architecto libero, expedita, deleniti eligendi.
                  </p>
              </div>
       
             
                <div class="mb-3">
                  <h2 class="text-3xl mb-6 text-semibold">ADDRESS</h2>
                 <p> Address: 73 Canal Street, New York, NY</p>
                   <p>Tel: +01 2=1234567890</p>
                    <p>Fax: +01 9876543210</p>
                <p>Email:Demo@vigorfit.com</p>
                <div class="flex gap-5 justify-start my-5">
                    <p> <Link><i class="fa-brands fa-facebook  fa-2xl text-blue-900"></i></Link> </p>
                    <p> <Link><i class="fa-brands fa-square-twitter fa-2xl text-blue-900"></i></Link> </p>
                    <p> <Link><i class="fa-brands fa-instagram fa-2xl text-blue-900"></i></Link> </p>
                    <p> <Link><i class="fa-brands fa-youtube fa-2xl text-blue-900"></i></Link> </p>
                    <p> <Link><i class="fa-brands fa-linkedin fa-2xl text-blue-900"></i></Link> </p>
                </div>
              </div>


              <div class="mb-3">
                  <h2 class="text-3xl mb-6 text-semibold"> OUR TIMING </h2>
                   
               <p> Monday 8:00 am - 9:00 pm</p>
               <p> Tuesday 8:00 am - 9:00 pm</p>
               <p> Thursday 8:00 am - 9:00 pm</p>
               <p> Friday 8:00 am - 9:00 pm</p>
               <p> Saturday 8:00 am - 9:00 pm</p>
               <p> Sunday CLOSED</p>

              </div>
              
       </div>
  </div>
</template>
