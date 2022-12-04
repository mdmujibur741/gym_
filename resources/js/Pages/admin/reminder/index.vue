<template>
  <AuthenticatedLayout>
         <section class="max-w-full m-6">
            <h3 class="bg-gray-100 p-4 rounded-lg mb-4 drop-shadow-md w-6/12 m-auto text-center text-2xl"><b>Reminder Table</b> </h3>
                  
 <div class="bg-gray-100 drop-shadow-lg p-4 rounded-lg overflow-x-auto">
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
      <th class="border border-slate-300 px-2 py-2">Action</th>
    </tr>
  </thead>
  <tbody v-if="(reminders.data.length > 0)">
    <tr v-for="(rem, index) in reminders.data" :key="rem.index">
      <td class="border border-slate-300 px-2 py-2"> {{(index+1)}} </td>
      <td class="border border-slate-300 px-2 py-2"> {{rem.lead.name}} </td>
      <td class="border border-slate-300 px-2 py-2"> {{rem.lead.phone}} </td>
      <td class="border border-slate-300 px-2 py-2"> {{rem.reminder}} </td>
      <td class="border border-slate-300 px-2 py-2"> {{rem.reminder_date}} </td>
      <td class="border border-slate-300 px-2 py-2">{{rem.note}}</td>
      <td class="border border-slate-300 px-2 py-2">{{rem.status}}</td>
      <td class="border border-slate-300 px-2 py-2"> 
              <div class="flex">
                <Link :href="route('admin.reminder.unique',rem.id)" class=" bg-indigo-800 drop-shadow-lg rounded-lg px-2 py-1 text-white m-1"> <i class="fa-solid fa-square-plus"></i></Link> 
                <Link :href="route('admin.reminder.edit',rem.id)" class=" bg-blue-700 drop-shadow-lg rounded-lg px-2 py-1 text-white m-1"><i class="fa-solid fa-pen-to-square"></i></Link> 
                  <Link :href="route('admin.reminder.destroy',rem.id)" onclick="return confirm('Are you sure you want to delete this item')" type="button" method="delete" class="bg-red-500 drop-shadow-lg rounded-lg px-2 py-1 text-white m-1"><i class="fa-solid fa-trash"></i></Link> 
              </div>  
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
  <div v-if="(reminders.meta.links.length > 3)" class="p-4 flex justify-center items-center m-8">
    <nav class="isolate inline-flex -space-x-px shadow-sm px-12 py-2 bg-gray-50 drop-shadow-lg rounded-xl" aria-label="Pagination">
      
        <Link v-for="link in reminders.meta.links" :key="link.id" :href="link.url" class="relative z-10 inline-flex items-center border border-indigo-400 bg-indigo-50 px-4 py-2 text-sm font-medium text-indigo-600 focus:z-20 rounded-xl" v-html="link.label"/> 
  
      </nav>
  </div>
         </section>
        </AuthenticatedLayout>
</template>


<script setup>
               import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
               import { Link } from '@inertiajs/inertia-vue3';
              

               defineProps({
                    reminders : Object,
                   
               })

        

        
</script>