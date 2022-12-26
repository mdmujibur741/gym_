<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    countRem : Number,
    countLea :Number,
    countPac : Number,
    latestRem : Object
})

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-5">
        

            <!-- cards -->
            <div class="grid lg:grid-cols-3 px-8 py-4 gap-5">
            

            <div class="bg-white p-3 rounded-2xl shadow-2xl ">
                   <div class="bg-white rounded-2xl shadow-2xl p-4">  <h2 class="text-2xl text-center">Lead ({{countLea}}) </h2>
                     <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, quis.</p>
                     </div>
            </div>

            <div class="bg-white p-3 rounded-2xl shadow-2xl ">
                   <div class="bg-white rounded-2xl shadow-2xl p-4">  <h2 class="text-2xl text-center">Reminder ({{countRem}}) </h2>
                     <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, quis.</p>
                     </div>
            </div>

            <div class="bg-white p-3 rounded-2xl shadow-2xl ">
                   <div class="bg-white rounded-2xl shadow-2xl p-4">  <h2 class="text-2xl text-center">Package ({{countPac}}) </h2>
                     <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, quis.</p>
                     </div>
            </div>

          
            
            </div>


               <!-- Reminder Latest Data -->
               <div class="bg-gray-100 drop-shadow-lg p-4 rounded-lg overflow-x-auto m-6">
    <table class="table-auto w-full border-collapse border border-slate-400 drop-shadow-md m-auto overflow-x-hidden">
  <thead class="bg-gray-300">
    <tr>
      <th class="border border-slate-300 px-2 py-2">Serial</th>
      <th class="border border-slate-300 px-2 py-2">Name</th>
      <th class="border border-slate-300 px-2 py-2">Phone</th>
      <th class="border border-slate-300 px-2 py-2">Reminder</th>
      <th class="border border-slate-300 px-2 py-2">Reminder Date</th>
      <th class="border border-slate-300 px-2 py-2">Note</th>
      <th class="border border-slate-300 px-2 py-2">Status</th>
    </tr>
  </thead>
    <tbody v-if="(latestRem.data.length > 0)">
    <tr v-for="(rem, index) in latestRem.data" :key="rem.index">
      <td class="border border-slate-300 px-2 py-2"> {{(index+1)}} </td>
      <td class="border border-slate-300 px-2 py-2"> {{rem.lead.name}} </td>
       <td class="border border-slate-300 px-2 py-2"> {{rem.lead.phone}} </td>
     <td class="border border-slate-300 px-2 py-2"> {{rem.reminder}} </td>
      <td class="border border-slate-300 px-2 py-2"> {{rem.reminder_date}} </td>
      <td class="border border-slate-300 px-2 py-2">{{rem.note}}</td>
      <td class="border border-slate-300 px-2 py-2">{{rem.status}}</td> 
    
    </tr>
               
  </tbody> 
  <tbody v-else>
    <tr>
              <h2>NO DATA FOUND</h2>
     </tr>
  </tbody> 
</table>
</div>

        </div>
    </AuthenticatedLayout>
</template>
