<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { useForm, usePage, Link } from "@inertiajs/inertia-vue3";
import { useToastr } from "../../../../tostr";

const toastr = useToastr();

defineProps({
  about: Object,
});

const form = useForm({
  title: "",
  description: "",
  image: "",

});

function cleanForm(){
    form.reset();
    location.reload();
    toastr.success('Add About Data Successfully');
} 

const submit = () => {
  form.post(route("admin.about.store"),{
        onSuccess: ()=> cleanForm()
        
  });
};
</script>

<template>
  <AuthenticatedLayout>
    <section class="bg-gray-200 min-h-[100vh]">
      <div class="min-h-[100vh] justify-center items-center gap-5 p-8">
        <div class="w-full bg-gray-200 p-5 rounded-2xl drop-shadow-2xl mx-auto">
          <div v-if="about.data.length > 0" class="p-6">
            <div v-for="ab in about.data" :key="ab.id">
               <div class="flex justify-end">
                <Link :href="route('admin.about.edit',ab.id)" class="bg-blue-600 text-white px-5 py-2 rounded-xl"><i class="fa-solid fa-pen-to-square"></i></Link>
                </div>
              <h3 class="mb-3"><b>Title :-</b> {{ ab.title }}</h3>
              <p class="mb-3"><b> Description:-</b> {{ ab.description }}</p>
              <b> Image</b>
              <img :src="ab.image" alt="" class="rounded-2xl" />
            </div>
          </div>


          <!-- Create Data -->
          <div v-else class="p-6">
            <form
              @submit.prevent="submit"
              class="w-full bg-gray-200 p-5 rounded-2xl drop-shadow-2xl"
            >
              <!-- Heading Form -->
              <div class="bg-gray-200 drop-shadow-md p-4 m-auto rounded-2xl mb-5 w-6/12">
                <h2 class="text-center text-black">
                  <i class="fa-solid fa-gear"></i> About Data 
                </h2>
              </div>
              <div class="mb-3">
                <InputLabel for="title" value="Title" />
                <TextInput type="text" v-model="form.title" id="title"  placeholder="Enter Title"/>
                
                <InputError :message="form.errors.title" />
              </div>

              <div class="mb-3">
                <InputLabel for="description" value="Description" />
                <textarea
                  v-model="form.description"
                  id="description"
                  rows="4"
                  class="w-full rounded-xl"
                ></textarea>
                <InputError :message="form.errors.description" />
              </div>

              <div class="mb-3">
                <InputLabel id="image" value="Image" />
                <TextInput
                  type="file"
                  v-model="form.image"
                  @input="form.image = $event.target.files[0]"
                  class="border-solid border-2 border-gray-500"
                />
                <InputError :message="form.errors.image" />
              </div>

              <div class="mb-2 text-center">
                <PrimaryButton
                  :class="{ 'opacity-25': form.processing }"
                  :disabled="form.processing"
                  >Submit</PrimaryButton
                >
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </AuthenticatedLayout>
</template>
