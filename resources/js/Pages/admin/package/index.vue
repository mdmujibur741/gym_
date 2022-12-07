<template>
  <div class="">
    <div class="min-h-screen">
    <AuthenticatedLayout>
      <!-- Heading  -->
      <h2 class="font-bold text-center mb-8 mt-5">
        <span class="bg-indigo-200 px-10 py-4 w-8/12 rounded-2xl drop-shadow-xl"
          >Package Table</span
        >
      </h2>
      <h3 class="text-right mb-5">
        <Link class="bg-indigo-200 px-10 p-3 rounded-2xl drop-shadow-xl text-right lg:mr-12 "
          :href="route('admin.package.create')" > Add Package</Link
        >
      </h3>
      <div class="rounded-xl w-10/12 bg-blue-100 p-4 drop-shadow-xl m-auto">
        <!-- table Section -->
        <div class="bg-blue-100 drop-shadow-lg p-4 rounded-lg overflow-x-auto">
          <table
            class="table-auto w-full border-collapse border border-slate-400 drop-shadow-md m-auto overflow-x-hidden"
          >
            <thead class="bg-gray-300">
              <tr>
                <th class="border border-slate-300 px-2 py-2">Serial</th>
                <th class="border border-slate-300 px-2 py-2">Name</th>
                <th class="border border-slate-300 px-2 py-2">Price</th>
                <th class="border border-slate-300 px-2 py-2">Action</th>
              </tr>
            </thead>
            <tbody v-if="(package_data.data.length > 0)">
              <tr v-for="(pack, index) in package_data.data" :key="pack.index">
                <td class="border border-slate-300 px-2 py-2">{{ index + 1 }}</td>
                <td class="border border-slate-300 px-2 py-2">{{ pack.name }}</td>
                <td class="border border-slate-300 px-2 py-2">{{ pack.price }}</td>

                <td class="border border-slate-300 px-2 py-2">
                  <div class="flex">
                    <Link
                      :href="route('admin.package.edit', pack.id)"
                      class="bg-indigo-800 drop-shadow-lg rounded-lg px-2 py-1 text-white m-1"
                    >
                      <i class="fa-solid fa-pen-to-square"></i>
                    </Link>
                    <Link
                      :href="route('admin.package.destroy', pack.id)"
                      onclick="return confirm('Are you sure you want to delete this item')"
                      type="button"
                      method="delete"
                      class="bg-red-500 drop-shadow-lg rounded-lg px-2 py-1 text-white m-1"
                    >
                      <i class="fa-solid fa-trash"></i>
                    </Link>
                  </div>
                </td>
              </tr>
            </tbody>
            <tbody v-else>
              <tr>
                <td class="text-center py-2"><h2 class="font-bold">NO Data Found</h2></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </AuthenticatedLayout>
    </div>
  </div>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
  package_data: Object,
});

</script>
