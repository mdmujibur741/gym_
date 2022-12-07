<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/inertia-vue3";
import SideNav from "@/Components/SideNav.vue";

</script>

<template>
  <div>
    <div class="min-h-screen bg-gray-100">
      <div class="grid lg:grid-cols-6 md:grid-cols-5">
        <!-- Side Nav -->
        <div class="md:min-h-screen shadow-md bg-white px-1 pt-12">
          <ul class="">


            <li class="">
              <SideNav :href="route('dashboard')" :class="{ 'active': $page.url.startsWith('/dashboard') }">
                <i class="fa-solid fa-gauge mr-2"></i> <b>DashBoard</b> 
              </SideNav>
            </li>

            <li class="">
              <SideNav :href="route('admin.lead.index')" :class="{ 'active': $page.url.startsWith('/admin/lead') }">
                <i class="fa-solid fa-chalkboard-user mr-2"></i> <b>Lead</b> 
              </SideNav>
            </li>

            <li class="">
              <SideNav :href="route('admin.reminder.index')" :class="{ 'active': $page.url.startsWith('/admin/reminder') }">
                <i class="fa-solid fa-bell-slash mr-2"></i> <b> Reminder </b> 
              </SideNav>
            </li>

            <li class="">
              <SideNav :href="route('admin.package.index')" :class="{ 'active': $page.url.startsWith('/admin/package') }">
                <i class="fa-solid fa-box-archive mr-2"></i> <b> Package </b> 
              </SideNav>
            </li>

            <li class="">
              <SideNav :href="route('admin.profile.edit')" :class="{ 'active': $page.url.startsWith('/admin/profile') }">      
                 <i class="fa-solid fa-id-card mr-2"></i> <b>Profile</b>
              </SideNav>
            </li>

                 <li class="">
              <SideNav :href="route('logout')" method="post" as="button">
              <i class="fa-solid fa-right-from-bracket mr-2"></i><b>Logout</b>
             </SideNav>
            </li>
          </ul>
        </div>
        <div class="lg:col-span-5 md:col-span-4 min-w-screen">
          <main>
            <slot />
          </main>
        </div>
      </div>
    </div>
  </div>
</template>


<style scoped>
       .active{
                 background: #1D4ED8;  
                 color: azure;
                
       }
</style>
