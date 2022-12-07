<template>
    <div class="bg-blue-300">
    <AuthenticatedLayout>
            <section class="bg-blue-200">
                        <div class="min-h-screen  flex justify-center items-center">
                                <form @submit.prevent="submit" class="bg-blue-100 w-full md:w-10/12 mx-4 lg:w-8/12 min-h-3/6 p-8 rounded-xl drop-shadow-lg">
                                                   <!-- Heading Form -->
                                         <div class="bg-gray-200 w-8/12 drop-shadow-md p-4 m-auto rounded-2xl mb-5">
                                                <h2 class="text-center text-black ">EDIT LEAD</h2>
                                         </div>

                                    <div class="mb-3">
                                      <InputLabel for="name" value="Name"/>
                                      <TextInput type="text" id="name" v-model="form.name" placeholder="Enter Name"/>
                                      <InputError :message="form.errors.name"/>
                                   </div>

                                     <div class="mb-3">
                                      <InputLabel for="email" value="Email"/>
                                      <TextInput type="email" id="email" v-model="form.email" placeholder="Enter Email"/>
                                      <InputError :message="form.errors.email"/>
                                    
                                     </div>
                                     <div class="mb-3">
                                      <InputLabel for="phone" value="Phone"/>
                                      <TextInput type="tel" id="phone" v-model="form.phone" placeholder="Enter Phone"/>
                                      <InputError :message="form.errors.phone"/>
                                     </div>


                                     <div class="mb-3">
                                      <InputLabel for="package_id" value="Interest Package"/>
                                        <select v-model="form.package_id" class="px-2 py-1 placeholder-slate-300 text-slate-600 relative border-blue-500 bg-white rounded-lg text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                                      <option v-for="pack in package_data.data" :value="pack.id"> {{pack.name}} </option>
                                        </select>
                                      <InputError :message="form.errors.package_id"/>
                                     </div>

                                     <div class="mb-3">
                                        <select v-model="form.gender" class="px-2 py-1 placeholder-slate-300 text-slate-600 relative border-blue-500 bg-white rounded-lg text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                              <option value="">Choose Gender</option>
                                              <option value="male"> Male </option>
                                              <option value="female"> Female </option>
                                              <option value="other"> Other </option>
                                        </select>
                                      <InputError :message="form.errors.gender"/>                                    
                                     </div>
                                
                                     <div class="mb-3">
                                      <InputLabel for="dob" value="Date Of Birth"/>
                                      <TextInput type="date" id="dob" v-model="form.dob"/>
                                      <InputError :message="form.errors.dob"/>                                  
                                     </div>

                                     <div class="text-center">
                                        <PrimaryButton :class="{ 'opacity-30': form.processing }" :disabled="form.processing">
                                       Update
                                        </PrimaryButton>
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
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Inertia } from '@inertiajs/inertia';
 
    
  const props = defineProps({
            lead : Object,
            package_data : Object
    })



  const form = useForm({
        name : props.lead?.name,
        email : props.lead?.email,
        phone :props.lead?.phone,
        gender : props.lead?.gender,
        dob: props.lead?.dob,
        package_id : props.lead?.package_id,
  })


 const submit = () => {
    Inertia.post(`/admin/lead/${props.lead.id}`,{
          _method : "put",
          name : form.name,
          email : form.email,
          phone: form.phone,
          gender : form.gender,
          dob : form.dob,
          package_id : form.package_id,


    })
 }



</script>