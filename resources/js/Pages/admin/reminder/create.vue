<template>
  <div class="bg-blue-300">
  <AuthenticatedLayout>
          <section class="bg-blue-200">
                      <div class="min-h-screen  flex justify-center items-center">
                              <form @submit.prevent="submit" class="bg-blue-100 w-full md:w-10/12 mx-4 lg:w-8/12 min-h-3/6 p-8 rounded-xl drop-shadow-lg">
                                                 <!-- Heading Form -->
                                       <div class="bg-gray-200 w-8/12 drop-shadow-md p-4 m-auto rounded-2xl mb-5">
                                              <h2 class="text-center text-black"> <i class="fa-solid fa-note-sticky fa-xl text-blue-900"></i> ADD REMINDER</h2>
                                             
                                       </div>

                                  <div class="mb-3">
                                    <InputLabel for="reminder" value="Reminder"/>
                                      <textarea v-model="form.reminder" id="reminder" rows="2" class="px-2 py-1 placeholder-slate-300 text-slate-600 relative border-blue-500 bg-white rounded-lg text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" placeholder="Enter Reminder ................"></textarea>
                                    <InputError :message="form.errors.reminder"/>
                                 </div>

                                 <div class="mb-3">
                                    <InputLabel for="note" value="Note"/>
                                      <textarea v-model="form.note" id="note" rows="2" class="px-2 py-1 placeholder-slate-300 text-slate-600 relative border-blue-500 bg-white rounded-lg text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" placeholder="Enter Note ..............."></textarea>
                                    <InputError :message="form.errors.note"/>
                                 </div>


                                   <div class="mb-3">
                                    <InputLabel for="reminder_date" value="Reminder Date"/>
                                    <TextInput type="date" id="reminder_date" v-model="form.reminder_date"/>
                                    <InputError :message="form.errors.reminder_date"/>
                                  
                                   </div>

                         

                                   <div class="mb-3">
                                        <select v-model="form.status" class="px-2 py-1 placeholder-slate-300 text-slate-600 relative border-blue-500 bg-white rounded-lg text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full">
                                           <option value="" selected disabled> Choose Status </option>
                                           <option value="pending">Pending</option>
                                           <option value="accept">Accept</option>
                                           <option value="complete">Complete</option>
                                         </select>
                                     </div>
                          

                                   <div class="text-center">
                                      <PrimaryButton :class="{ 'opacity-30': form.processing }" :disabled="form.processing">
                                        SUBMIT
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
import { isIntegerKey } from '@vue/shared';


const form = useForm({
  reminder : '',
  note : '',
  reminder_date : '',
  status : '',
  lead_id : props.lead,     //That Lead Id For Reminder
  
})

const submit = () => {
     form.post(route('admin.reminder.unique.store'))
}


const props = defineProps({
  lead : Number
})

</script>