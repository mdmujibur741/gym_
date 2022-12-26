<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { useForm, Link } from "@inertiajs/inertia-vue3";
import { provide } from "vue";
import { useToastr } from "../../../../tostr";

const toastr = useToastr();


defineProps({
    provides : Object
})


const form = useForm({
  title_1stLine: "",
  title : "",
  point_one: "",
  point_two: "",
  point_three: "",
  point_four: "",
  image: "",


});

function cleanForm(){
    form.reset();
    location.reload();
    toastr.success('Provide Data Add Successfully');
} 

const submit = () => {
  form.post(route("admin.provide.store"),{
        onSuccess: ()=> cleanForm()
        
  });
};
</script>

<template>
  <AuthenticatedLayout>
    <section class="bg-gray-200 min-h-[100vh]">
      <div class="min-h-[100vh] justify-center items-center gap-5 p-5">
        <div class="w-full bg-gray-200 p-5 rounded-2xl drop-shadow-2xl mx-auto">
          <div v-if="provides.data.length > 0" class="p-6">
            <div v-for="prov in provides.data" :key="prov.id">
               <div class="flex justify-end">
                <Link :href="route('admin.provide.edit',prov.id)" class="bg-blue-600 text-white px-5 py-2 rounded-xl"><i class="fa-solid fa-pen-to-square"></i></Link>
                </div>
              <h3 class="mb-3"><b>Title Fast Line  :-</b> {{ prov.title_1stLine }}</h3>
              <h3 class="mb-3"><b>Title  :-</b> {{ prov.title }}</h3>
              <h6 class="mb-3"><b> Pont One:-</b> {{ prov.point_one }}</h6>
              <h6 class="mb-3"><b> Point Two:-</b> {{ prov.point_two }}</h6>
              <h6 class="mb-3"><b> Point Three:-</b> {{ prov.point_three }}</h6>
              <h6 class="mb-3"><b> Point Four:-</b> {{ prov.point_four }}</h6>
              <b>Image</b>
              <img :src="prov.image" alt="" class="rounded-2xl" />
            </div>
          </div>


          <!-- Create Data -->
          <div v-else class="">
            <form
              @submit.prevent="submit"
              class="w-full bg-gray-200 p-5 rounded-2xl drop-shadow-2xl"
            >
              <!-- Heading Form -->
              <div class="bg-gray-200 drop-shadow-md p-4 m-auto rounded-2xl mb-5 w-6/12">
                <h2 class="text-center text-black">
                  <i class="fa-solid fa-gear"></i> Provide Data
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
                  >SUBMIT</PrimaryButton
                >
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </AuthenticatedLayout>
</template>
