<template>
  <AuthenticatedLayout>
         <section class="max-w-full m-6">
            <h3 class="bg-gray-100 p-4 rounded-lg mb-4 drop-shadow-lg w-6/12 m-auto text-center text-2xl"><b>Lead Table</b> </h3>
                  <h6 class="text-end mb-6"> <Link :href="route('admin.lead.create')" class="bg-blue-700 px-3 py-2 text-white rounded-2xl"> Add Lead</Link></h6>
 <div class="bg-gray-100 drop-shadow-lg p-4 rounded-lg">
    <table class="table-auto w-full border-collapse border border-slate-400 drop-shadow-lg m-auto">
  <thead class="bg-gray-300">
    <tr>
      <th class="border border-slate-300">State</th>
      <th class="border border-slate-300">City</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border border-slate-300">Indiana</td>
      <td class="border border-slate-300">Indianapolis</td>
    </tr>
    <tr>
      <td class="border border-slate-300">Ohio</td>
      <td class="border border-slate-300">Columbus</td>
    </tr>
    <tr>
      <td class="border border-slate-300">Michigan</td>
      <td class="border border-slate-300">Detroit</td>
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
        
</script>