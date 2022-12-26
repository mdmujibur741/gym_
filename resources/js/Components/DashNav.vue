<script setup>
     import { ref } from 'vue';
     import { Link } from '@inertiajs/inertia-vue3';
     import SideNav from './SideNavLink.vue';

     const dropDown = ref("false");
</script>


<template>
<div>
    <ul>


<li>
  <SideNav :href="route('dashboard')" :class="{ 'active': $page.url.startsWith('/dashboard') }">
    <i class="fa-solid fa-gauge mr-2 text-lg"></i> <b>DashBoard</b> 
  </SideNav>
</li>

<li>
  <SideNav :href="route('admin.lead.index')" :class="{ 'active': $page.url.startsWith('/admin/lead') }">
    <i class="fa-solid fa-chalkboard-user mr-2 text-lg"></i> <b>Lead</b> 
  </SideNav>
</li>

<li>
  <SideNav :href="route('admin.reminder.index')" :class="{ 'active': $page.url.startsWith('/admin/reminder') }">
    <i class="fa-solid fa-bell-slash mr-2 text-lg"></i> <b> Reminder </b> 
  </SideNav>
</li>

<li>
  <SideNav :href="route('admin.package.index')" :class="{ 'active': $page.url.startsWith('/admin/package') }">
    <i class="fa-solid fa-box-archive mr-2 text-lg"></i> <b> Package </b> 
  </SideNav>
</li>

<li>
  <SideNav :href="route('admin.profile.edit')" :class="{ 'active': $page.url.startsWith('/admin/profile') }">      
     <i class="fa-solid fa-id-card mr-2 text-lg"></i> <b>Profile</b>
  </SideNav>
</li>

<li>
  <SideNav :href="route('admin.contact.index')" :class="{ 'active': $page.url.startsWith('/admin/contact') }">      
    <i class="fa-solid fa-envelope-open-text mr-2 text-lg"></i> <b>Message</b>
  </SideNav>
</li>

<li>
					<button type="button"  @click="dropDown = !dropDown"  class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example" :class="{ 'active': $page.component.startsWith('admin/setting/') }">
                 
                  <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>  <i class="fa-solid fa-gear"></i> Setting </span>
                  <i class="fa-solid fa-caret-down mr-2 text-lg"></i>
            </button>
					<ul id="dropdown-example " class="py-2 space-y-2" :class="{hidden:dropDown}">
						<li>
							<SideNav :href="route('admin.home.index')"
								>  <i class="fa-regular fa-circle mr-2 text-lg"></i> Home
              </SideNav>
						</li>
						<li>
							<SideNav :href="route('admin.provide.index')" > 
                <i class="fa-regular fa-circle mr-2 text-lg"></i>    Provider
              </SideNav>
						</li>

            <li>
							<SideNav :href="route('admin.about.index')" > 
                <i class="fa-regular fa-circle mr-2 text-lg"></i>  About
              </SideNav>
						</li>

            <li>
							<SideNav :href="route('admin.footer.index')" > 
                <i class="fa-regular fa-circle mr-2 text-lg"></i> Footer
              </SideNav>
						</li>
					</ul>
				</li>




     <li class="">
  <SideNav :href="route('logout')" method="post" as="button">
  <i class="fa-solid fa-right-from-bracket mr-2 text-lg"></i><b>Logout</b>
 </SideNav>
</li>


  <li class="flex justify-center items-center h-48 overflow-hidden">
      <Link :href="route('web.home')" class="bg-blue-700 p-2 text-white rounded-lg drop-shadow-xl overflow-hidden">Website</Link>
  </li>
</ul>
</div>


</template>

<style scoped>
        .active{
                 background: rgb(64, 5, 106);
                 color: aliceblue;
        }
</style>