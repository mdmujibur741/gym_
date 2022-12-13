<script setup>
     import { ref } from 'vue';
     import { Link } from '@inertiajs/inertia-vue3';
     import SideNav from './SideNavLink.vue';
</script>


<template>
<div>
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


  <li class="mt-10 pt-10 flex justify-center">
      <Link :href="route('web.home')" class="bg-blue-700 p-2 text-white rounded-lg drop-shadow-xl">Website</Link>
  </li>
</ul>
</div>


</template>