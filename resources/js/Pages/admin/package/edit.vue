

<template>
    <div>
    <AuthenticatedLayout>
    <div class="flex items-center min-h-screen bg-indigo-100">
        <div class="bg-blue-100 rounded-xl drop-shadow-xl p-4 md:w-10/12 lg:w-6/12 m-auto ">
        <form @submit.prevent="submit" class="bg-blue-100 w-full p-4 rounded-xl drop-shadow-lg" >
          <!-- Heading Form -->
          <div class="bg-gray-200 w-8/12 drop-shadow-md p-4 m-auto rounded-2xl mb-5">
            <h2 class="text-center text-black">
                <i class="fa-solid fa-file-pen "></i> Update Package
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

          <div class="mb-3">
            <InputLabel for="description" value="Description" />
              <textarea id="description" v-model="form.description" rows="3" class="w-full rounded-xl"></textarea>
            <InputError :message="form.errors.description" />
          </div>



          <div class="text-center">
            <PrimaryButton
              :class="{ 'opacity-30': form.processing }"
              :disabled="form.processing"
            >
             Update
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
import { Inertia } from "@inertiajs/inertia";
import { useToastr } from "../../../tostr";

const props = defineProps({
    package : Object
})

const toastr = useToastr();
const form = useForm({
  name: props.package?.name,
  price: props.package?.price,
  description: props.package?.description,
});

const submit = () => {
     Inertia.post(`/admin/package/${props.package.id}`,{
             _method : "put",
             name : form.name,
             price : form.price,
             description : form.description,
     },{
         onSuccess: () =>  toastr.success("Package Update Successfully"),
     })
}


</script>