<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { useForm, Link } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";
import { useToastr } from "../../../../tostr";

const toastr = useToastr();


const props = defineProps({
    provide : Object
})


const form = useForm({
  title_1stLine: props.provide?.title_1stLine,
  title : props.provide?.title,
  point_one: props.provide?.point_one,
  point_two: props.provide?.point_two,
  point_three: props.provide?.point_three,
  point_four: props.provide?.point_four,
  image: "",


});

function cleanForm(){
    form.reset();
    // location.reload();
    toastr.success('Provide Data Update Successfully');
} 

const submit = () => {
  Inertia.post(`/admin/provide/${props.provide.id}` ,{
         _method : "put",
         title_1stLine : form.title_1stLine,
         title : form.title,
         point_one : form.point_one,
         point_two : form.point_two,  
         point_three : form.point_three,  
         point_four : form.point_four,  
         image : form.image,     
  },{
      onSuccess: ()=> cleanForm()
  });
};
</script>

<template>
  <AuthenticatedLayout>
    <section class="bg-gray-200 min-h-[100vh]">
      <div class="min-h-[100vh] justify-center items-center gap-5 p-5">
        <div class="w-full bg-gray-200 p-5 rounded-2xl drop-shadow-2xl mx-auto">
       

          <!-- Edit Data -->
          <div class="">
            <form
              @submit.prevent="submit"
              class="w-full bg-gray-200 p-5 rounded-2xl drop-shadow-2xl"
            >
              <!-- Heading Form -->
              <div class="bg-gray-200 drop-shadow-md p-4 m-auto rounded-2xl mb-5 w-6/12">
                <h2 class="text-center text-black">
                  <i class="fa-solid fa-gear"></i> Provide Data Edit
                </h2>
              </div>
              <div class="mb-3">
                <InputLabel for="title_1stLine" value="Title Fast Line" />
                <TextInput v-model="form.title_1stLine" id="title_1stLine" placeholder="Enter Title Fast Line"/>
                <InputError :message="form.errors.title_1stLine" />
              </div>

              <div class="mb-3">
                <InputLabel for="title" value="Title" />
                <textarea v-model="form.title" id="title" rows="2" class="w-full rounded-xl" spellcheck="false"  placeholder="Enter Title"></textarea>
                <InputError :message="form.errors.title" />
              </div>

              <div class="mb-3">
                <InputLabel for="point_one" value="Point One" />
                <TextInput v-model="form.point_one" id="point_one" placeholder="Enter Point One"/>
                <InputError :message="form.errors.point_one" />
              </div>


              <div class="mb-3">
                <InputLabel for="point_two" value="Point Two" />
                <TextInput v-model="form.point_two" id="point_two" placeholder="Enter Point Two"/>
                <InputError :message="form.errors.point_two" />
              </div>

              <div class="mb-3">
                <InputLabel for="point_three" value="Point three" />
                <TextInput v-model="form.point_three" id="point_three" placeholder="Enter Point Three"/>
                <InputError :message="form.errors.point_three" />
              </div>

              <div class="mb-3">
                <InputLabel for="point_four" value="Point Four" />
                <TextInput v-model="form.point_four" id="point_four" placeholder="Enter Point Four"/>
                <InputError :message="form.errors.point_four" />
              </div>

              <div class="mb-3">
                <InputLabel id="image" value="Image" />
                <TextInput type="file" v-model="form.image" @input="form.image = $event.target.files[0]" class="border-solid border-2 border-gray-500"/>
                <InputError :message="form.errors.image" />
              </div>

              <div class="mb-2 text-center">
                <PrimaryButton
                  :class="{ 'opacity-25': form.processing }"
                  :disabled="form.processing"
                  >UPDATE</PrimaryButton
                >
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </AuthenticatedLayout>
</template>
