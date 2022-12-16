<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

const mobileMenu = ref("false");
</script>

<template>
  <!-- nav  -->
  <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
      <Link :href="route('web.home')" class="flex items-center text-blue-900">
        <span class="h-6 mr-3 sm:h-9"
          ><i class="fa-solid fa-dumbbell font-bold fa-2xl"></i>
        </span>
        <span
          class="self-center text-xl font-semibold whitespace-nowrap dark:text-white lg:mb-2"
        >
          Rahman Gym
        </span>
      </Link>
      <button
        data-collapse-toggle="navbar-default"
        type="button"
        @click="mobileMenu = !mobileMenu"
        class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="navbar-default"
        aria-expanded="false"
      >
        <span class="sr-only">Open main menu</span>
        <i class="fa-sharp fa-solid fa-bars fa-xl"></i>
      </button>
      <div
        class="w-full md:block md:w-auto"
        id="navbar-default"
        :class="{ hidden: mobileMenu }"
      >
        <ul
          class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
        >
          <li>
            <Link :href="route('web.home')" 
            class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page"
              >Home</Link
            >
          </li>
          <li>
            <Link
              :href="route('web.about')"
              class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
              >About</Link
            >
          </li>
         
          <li>
            <Link
              :href="route('web.contact')"
              class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
              >Contact</Link
            >
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>
