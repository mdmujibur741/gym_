<template>
  <AuthenticatedLayout>
         <section class="max-w-full m-6">
            <h3 class="bg-gray-100 p-4 rounded-lg mb-4 drop-shadow-md w-6/12 m-auto text-center text-2xl"><b>Lead Table</b> </h3>
                  <h6 class="text-end mb-6"> <Link :href="route('admin.lead.create')" class="bg-blue-700 px-3 py-2 text-white rounded-2xl drop-shadow-2xl"> Add Lead</Link></h6>
 <div class="bg-gray-100 drop-shadow-lg p-4 rounded-lg overflow-x-auto">
    <table class="table-auto w-full border-collapse border border-slate-400 drop-shadow-md m-auto overflow-x-hidden">
  <thead class="bg-gray-300">
    <tr>
      <th class="border border-slate-300 px-2 py-2">Serial</th>
      <th class="border border-slate-300 px-2 py-2">Name</th>
      <th class="border border-slate-300 px-2 py-2">Email</th>
      <th class="border border-slate-300 px-2 py-2">Phone</th>
      <th class="border border-slate-300 px-2 py-2">Gender</th>
      <th class="border border-slate-300 px-2 py-2">Age</th>
      <th class="border border-slate-300 px-2 py-2">package</th>
      <th class="border border-slate-300 px-2 py-2">Action</th>
    </tr>
  </thead>
  <tbody v-if="(leads.data.length > 0)">
    <tr v-for="(lead, index) in leads.data" :key="lead.index">
      <td class="border border-slate-300 px-2 py-2"> {{(index+1)}} </td>
      <td class="border border-slate-300 px-2 py-2"> {{lead.name}} </td>
      <td class="border border-slate-300 px-2 py-2"> {{lead.email}} </td>
      <td class="border border-slate-300 px-2 py-2"> {{lead.phone}} </td>
      <td class="border border-slate-300 px-2 py-2"> {{lead.gender}} </td>
      <td class="border border-slate-300 px-2 py-2">{{lead.age}}</td>
      <td class="border border-slate-300 px-2 py-2">{{lead.package.name}}</td>
      <td class="border border-slate-300 px-2 py-2">
            <div class="flex">
              <Link :href="route('admin.lead.show',lead.id)" class=" bg-blue-700 drop-shadow-lg rounded-lg px-2 py-1 text-white m-1"><i class="fa-solid fa-eye"></i></Link> 
                <Link :href="route('admin.lead.edit',lead.id)" class=" bg-indigo-800 drop-shadow-lg rounded-lg px-2 py-1 text-white m-1"><i class="fa-solid fa-pen-to-square"></i></Link> 
                  <Link :href="route('admin.lead.destroy',lead.id)" onclick="return confirm('Are you sure you want to delete this item')" type="button" method="delete" class="bg-red-500 drop-shadow-lg rounded-lg px-2 py-1 text-white m-1"> <i class="fa-solid fa-trash"></i></Link> 
            </div> 
      </td>
    </tr>
               
  </tbody>
  <tbody v-else>
     <tr>
          <td class="text-center py-2"> <h2 class="font-bold">NO Data Found</h2> </td>
      </tr>
  </tbody>
</table>
</div>


                 <!--Pagination  -->
          
  <div v-if="(leads.meta.links.length > 3)" class="p-4 flex justify-center items-center mt-2">
    <nav class="isolate inline-flex -space-x-px shadow-sm px-12 py-2 bg-gray-50 drop-shadow-lg rounded-xl" aria-label="Pagination">
      
        <Link v-for="link in leads.meta.links" :key="link.id" :href="link.url" class="relative z-10 inline-flex items-center border border-indigo-400 bg-indigo-50 px-3 py-1 text-sm font-medium text-indigo-600 focus:z-20 rounded-xl" v-html="link.label"/> 
  
      </nav>
  </div>
         </section>
        </AuthenticatedLayout>
</template>


<script setup>
               import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
               import { Link } from '@inertiajs/inertia-vue3';
              

               defineProps({
                   leads : Object,
                   
               })

        

        
</script>