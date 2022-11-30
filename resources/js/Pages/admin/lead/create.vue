<template>
    <div class="bg-blue-300">
    <AuthenticatedLayout>
            <section class="bg-blue-200">
                        <div class="min-h-screen  flex justify-center items-center">
                                <form class="bg-blue-100 w-full md:w-10/12 sm:mx-4 lg:w-5/12 min-h-3/6 p-8 rounded-xl drop-shadow-lg">
                                    <div class="mb-3">
                                      <InputLabel for="name" value="Name"/>
                                      <TextInput type="text" id="name" v-model="form.name" placeholder="Enter Name"/>
                                      <InputError/>
                                      {{form.name}}
                                     </div>
                                     <div class="mb-3">
                                      <InputLabel for="email" value="Email"/>
                                      <TextInput type="email" id="email" v-model="form.email" placeholder="Enter Email"/>
                                      <InputError/>
                                      {{form.email}}
                                     </div>
                                     <div class="mb-3">
                                      <InputLabel for="phone" value="Phone"/>
                                      <TextInput type="tel" id="phone" v-model="form.phone" placeholder="Enter Phone"/>
                                      <InputError/>
                                      {{form.phone}}
                                     </div>
                                     <div class="mb-3">
                                        <select v-model="form.gender" class="px-2 py-1 placeholder-slate-300 text-slate-600 relative border-blue-500 bg-white bg-white rounded-lg text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                              <option value="">Choose Gender</option>
                                              <option value="male"> Male </option>
                                              <option value="female"> Female </option>
                                              <option value="other"> Other </option>
                                        </select>
                                      <InputError/>
                                      {{form.gender}}
                                     </div>
                                     <div class="mb-3">
                                      <InputLabel for="age" value="Age"/>
                                      <TextInput type="number" id="age" v-model="form.age" placeholder="Enter Age"/>
                                      <InputError/>
                                      {{form.age}}
                                     </div>

                                 </form>
                         </div>
            </section>
        </AuthenticatedLayout>
    </div>
</template>


<script setup>
 import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
 import InputError from '@/Components/InputError.vue';
 import InputLabel from '@/Components/InputLabel.vue';
 import TextInput from '@/Components/TextInput.vue';
 import { useForm } from '@inertiajs/inertia-vue3';
 
 const form = useForm({
       name : '',
       email : '',
       phone : '',
       gender : '',
       age : '',
 })

</script>