<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import InputError from '@/Components/InputError.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import TextInput from '@/Components/TextInput.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import { useForm, usePage } from '@inertiajs/inertia-vue3';
    import { Inertia } from '@inertiajs/inertia';
    import { useToastr } from "../../../../tostr";

    const toastr = useToastr();

   
    const props = defineProps({
            home : Object,
           
    })



    function cleanForm(){
      location.reload();
      toastr.success("Home Data Update Successfully");
    }
    
      
     

    
    

    const form = useForm({
         title : props.home?.title,
         description : props.home?.description,
         image : ''
    })


    const submit = () => {
          Inertia.post(`/admin/home/${props.home.id}`,{
            _method : "put",
            title : form.title,
            description : form.description,
            image : form.image

          },{
               onSuccess: () => cleanForm()
          })
    }




</script>


<template>
    <AuthenticatedLayout>

      <section class="bg-gray-200 min-h-[100vh]">
 
    <div class="min-h-[100vh] flex justify-center items-center gap-5 p-8">

      <div class="w-full bg-gray-200 p-5 rounded-2xl drop-shadow-2xl">
             <div class="p-6">
          
              <form @submit.prevent="submit" class="w-full bg-gray-200 p-5 rounded-2xl drop-shadow-2xl">
                 <!-- Heading Form -->
            <div class="bg-gray-200 drop-shadow-md p-4 m-auto rounded-2xl mb-5">
              <h2 class="text-center text-black">
                <i class="fa-solid fa-gear"></i> Home Data Edit
              </h2>
            </div>
              <div class="mb-3">
                    <InputLabel for="title" value="Title"/>
                    <textarea v-model="form.title" id="" rows="3" class="w-full rounded-xl ">  </textarea>
                    <InputError :message="form.errors.title"/>
              </div>

              <div class="mb-3">
                    <InputLabel for="description" value="Description"/>
                    <textarea v-model="form.description" id="description" rows="4" class="w-full rounded-xl "></textarea>
                    <InputError :message="form.errors.description"/>
              </div>

              <div class="mb-3">
                    <InputLabel id="image" value="Image"/>
                    <TextInput type="file" v-model="form.image" @input="form.image = $event.target.files[0]" class="border-solid border-2 border-gray-500"/>
                    <InputError :message="form.errors.image"/>
              </div>

            <div class="mb-2 text-center">
              <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Update</PrimaryButton>
            </div>


          


          </form>
                      
              </div>
           
          </div>

        
    </div>
    
    
      </section> 
      
   </AuthenticatedLayout>
</template>