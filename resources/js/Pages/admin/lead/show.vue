<template>
  <div class="bg-blue-300">
    <AuthenticatedLayout>
      <section class="bg-blue-200">
        <div class="min-h-screen flex justify-center items-center">
          <div
            class="bg-blue-100 w-full md:w-10/12 mx-4 lg:w-8/12 min-h-3/6 p-8 rounded-xl drop-shadow-lg"
          >
            <!-- Heading Form -->
            <div class="bg-gray-200 w-full md:w-8/12 drop-shadow-md p-4 m-auto rounded-2xl mb-5">
              <h2 class="text-center text-black">
                <i class="fa-solid fa-user"></i> Profile
              </h2>
            </div>
            <div class="">
         
              <h3>
                Name: <strong>{{ lead.name }}</strong>
              </h3>
              <p>Age : <strong>{{ lead.age }}</strong></p>
              <p>Email : <strong>{{ lead.email }}</strong></p>
              <p>Phone : <strong>{{ lead.phone }}</strong></p>
              <p>Package : <strong>{{ lead.package.name }} ({{lead.package.price}}&#36;)</strong></p>
            </div>

            <div v-if="lead.reminder.length > 0" class="bg-gary-50 mt-10 mx-6 overflow-auto">
              <table
                class="table-auto w-full border-collapse border border-slate-400 drop-shadow-md m-auto overflow-x-hidden"
              >
                <thead class="bg-gray-300 rounded-xl">
                  <tr>
                    <th class="border border-slate-300 px-2 py-2">Name</th>
                    <th class="border border-slate-300 px-2 py-2">Reminder</th>
                    <!-- <th class="border border-slate-300 px-2 py-2">Date</th> -->
                    <th class="border border-slate-300 px-2 py-2">Status</th>
                    <th class="border border-slate-300 px-2 py-2">Note</th>
                    <th class="border border-slate-300 px-2 py-2">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(rem, index) in lead.reminder" :key="rem.index">
                    <td class="border border-slate-300 px-2 py-2">dfd</td>
                    <td class="border border-slate-300 px-2 py-2">{{ rem.reminder }}</td>
                    <!-- <td class="border border-slate-300 px-2 py-2">
                      {{ rem.reminder_date }}
                    </td> -->
                    <td class="border border-slate-300 px-2 py-2">{{ rem.status }}</td>
                    <td class="border border-slate-300 px-2 py-2">{{ rem.note }}</td>
                    <td class="border border-slate-300 px-2 py-2"> <Link :href="route('admin.reminder.destroy',rem.id)" method="delete" class="bg-blue-700 rounded-xl py-2 px-4 text-white"><i class="fa-solid fa-trash"></i></Link> </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div v-else class="bg-gray-50 p-6 rounded-xl drop-shadow-xl m-6">
                       <h3>NO Reminder Found </h3>
            </div>
            <div class="text-end mt-10">
                 
            
                 
           
             <Link :href="route('admin.reminder.unique',lead.id)" class="bg-blue-700 py-2 px-3 text-white mt-12 rounded-xl"> ADD REMINDER </Link>
            </div> 
        
               
          </div>
        </div>
      </section>
    </AuthenticatedLayout>
  </div>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { objectToString } from "@vue/shared";
import { Link } from "@inertiajs/inertia-vue3";


const props = defineProps({
  lead: Array,
});
</script>
