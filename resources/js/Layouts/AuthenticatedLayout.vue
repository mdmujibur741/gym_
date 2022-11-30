<script setup>
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/inertia-vue3";

const showingNavigationDropdown = ref(false);
</script>

<template>
  <div>
    <div class="min-h-screen bg-gray-100">
      <div class="grid lg:grid-cols-6 md:grid-cols-5">
        <!-- Side Nav -->
        <div class="md:min-h-screen shadow-md bg-white px-1">
          <ul class="">
            <li class="">
              <a
                class="flex  items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out"
                href="#!"
                data-mdb-ripple="true"
                data-mdb-ripple-color="dark"
                 > Sidenav link 1</a
              >
            </li>
       
            <li class="">
              <Link
                class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out"
                :href="route('admin.lead.index')"
                data-mdb-ripple="true" data-mdb-ripple-color="dark"
                >Lead</Link
              >
            </li>

            <li class="">
              <Link
                class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out"
                :href="route('admin.profile.edit')"
                data-mdb-ripple="true"
                data-mdb-ripple-color="dark"
                >Profile</Link >
            </li>

                 <li class="">
              <Link
                class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out"
              :href="route('logout')" method="post" as="button"
                data-mdb-ripple="true"
                data-mdb-ripple-color="dark"
                >Logout</Link>
            </li>
          </ul>
        </div>
        <div class="lg:col-span-5 md:col-span-4">
          <main>
            <slot />
          </main>
        </div>
      </div>
    </div>
  </div>
</template>
