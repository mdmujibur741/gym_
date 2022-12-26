<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';


defineProps({
     contacts : Object,
    
})

</script>



<template>
    <AuthenticatedLayout>
           <section class="max-w-full m-6">
              <h3 class="bg-gray-100 p-4 rounded-lg mb-4 drop-shadow-md w-6/12 m-auto text-center text-2xl"><b>Message Table</b> </h3>
                    
   <div class="bg-gray-100 drop-shadow-lg p-4 rounded-lg overflow-x-auto">
      <table class="table-auto w-full border-collapse border border-slate-400 drop-shadow-md m-auto overflow-x-hidden">
    <thead class="bg-gray-300">
      <tr>
        <th class="border border-slate-300 px-2 py-2">Serial</th>
        <th class="border border-slate-300 px-2 py-2">Name</th>
        <th class="border border-slate-300 px-2 py-2">Email</th>
        <th class="border border-slate-300 px-2 py-2">Phone</th>
        <th class="border border-slate-300 px-2 py-2">Message</th>
        <th class="border border-slate-300 px-2 py-2"> Date</th>
        <th class="border border-slate-300 px-2 py-2">Action</th>
      </tr>
    </thead>
     <tbody v-if="(contacts.data.length > 0)">
      <tr v-for="(con, index) in contacts.data" :key="con.index">
        <td class="border border-slate-300 px-2 py-2"> {{(index+1)}} </td>
        <td class="border border-slate-300 px-2 py-2"> {{con.name}} </td>
        <td class="border border-slate-300 px-2 py-2"> {{con.email}} </td>
         <td class="border border-slate-300 px-2 py-2"> {{con.phone}} </td>
       <td class="border border-slate-300 px-2 py-2"> {{con.message}} </td>
        <td class="border border-slate-300 px-2 py-2"> {{con.created_at}} </td>

  
        <td class="border border-slate-300 px-2 py-2"> 
             
                    <Link :href="route('admin.contact.destroy',con.id)" onclick="return confirm('Are you sure you want to delete this item')" type="button" method="delete" class="bg-red-500 drop-shadow-lg rounded-lg px-3 py-1 text-white m-1"><i class="fa-solid fa-trash"></i></Link> 
              
        </td>
      </tr>
                 
    </tbody> 
    <tbody v-else>
      <tr>
                <h2>NO DATA FOUND</h2>
       </tr>
    </tbody> 
  </table>
  </div>
  
  
                   <!--Pagination  -->
    <div v-if="(contacts.meta.links.length > 3)" class="p-4 flex justify-center items-center m-8">
      <nav class="isolate inline-flex -space-x-px shadow-sm px-12 py-2 bg-gray-50 drop-shadow-lg rounded-xl" aria-label="Pagination">
        
          <Link v-for="link in contacts.meta.links" :key="link.id" :href="link.url" class="relative z-10 inline-flex items-center border border-indigo-400 bg-indigo-50 px-4 py-2 text-sm font-medium text-indigo-600 focus:z-20 rounded-xl" v-html="link.label"/> 
    
        </nav>
    </div>
           </section>
          </AuthenticatedLayout>
  </template>
  
  
