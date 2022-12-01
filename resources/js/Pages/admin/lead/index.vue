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
  <tbody>
    <tr v-for="(lead, index) in leads.data" :key="lead.index">
      <td class="border border-slate-300 px-2 py-2"> {{(index+1)}} </td>
      <td class="border border-slate-300 px-2 py-2"> {{lead.name}} </td>
      <td class="border border-slate-300 px-2 py-2"> {{lead.email}} </td>
      <td class="border border-slate-300 px-2 py-2"> {{lead.phone}} </td>
      <td class="border border-slate-300 px-2 py-2"> {{lead.gender}} </td>
      <td class="border border-slate-300 px-2 py-2">{{lead.age}}</td>
      <td class="border border-slate-300 px-2 py-2">{{lead.interest_package}}</td>
      <td class="border border-slate-300 px-2 py-2">
                <Link :href="route('admin.lead.edit',lead.id)" class=" bg-indigo-800 drop-shadow-lg rounded-lg px-2 py-1 text-white mr-1">Edit</Link> 
                  <Link :href="route('admin.lead.destroy',lead.id)" onclick="return confirm('Are you sure you want to delete this item')" type="button" method="delete" class="bg-red-500 drop-shadow-lg rounded-lg px-2 py-1 text-white">Delete</Link>  
      </td>
    </tr>
               
  </tbody>
</table>
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