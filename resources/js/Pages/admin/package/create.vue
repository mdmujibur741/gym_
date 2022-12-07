

<template>
    <div>
    <AuthenticatedLayout>
    <div class="flex items-center min-h-screen bg-indigo-100">
        <div class="bg-blue-100 rounded-xl drop-shadow-xl p-4 md:w-10/12 lg:w-6/12 m-auto ">
        <form @submit.prevent="submit" class="bg-blue-100 w-full p-4 rounded-xl drop-shadow-lg" >
          <!-- Heading Form -->
          <div class="bg-gray-200 w-8/12 drop-shadow-md p-4 m-auto rounded-2xl mb-5">
            <h2 class="text-center text-black">
                <i class="fa-solid fa-plus"></i> ADD Package
            </h2>
          </div>

          <div class="mb-3">
            <InputLabel for="name" value="Package Name" />
            <TextInput type="text" id="name" v-model="form.name" placeholder="Enter Package Name" />
            <InputError :message="form.errors.name" />
          </div>

          <div class="mb-3">
            <InputLabel for="price" value="Price" />
            <TextInput type="number" id="price" v-model="form.price" placeholder="Enter Price"  />
            <InputError :message="form.errors.price" />
          </div>


          <div class="text-center">
            <PrimaryButton
              :class="{ 'opacity-30': form.processing }"
              :disabled="form.processing"
            >
              SUBMIT
            </PrimaryButton>
          </div>
        </form>
      </div>
    </div>
    </AuthenticatedLayout>
    </div>
</template>



<script setup>
import PrimaryButton from "@/Components/PrimaryButton.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import { useForm, Link } from "@inertiajs/inertia-vue3";




const form = useForm({
  name: "",
  price: "",
});

const submit = () => {
       form.post(route('admin.package.store'),{
          onSuccess : () => form.reset()
       }) 
}


</script>