<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { useForm, Link } from "@inertiajs/inertia-vue3";
import { useToastr } from "../../../../tostr";

const toastr = useToastr();


defineProps({
  footers: Object,
});

const form = useForm({
  address: "",
  phone: "",
  email: "",
  facebook: "",
  twitter: "",
  instagram: "",
  youtube: "",
  linkedin: "",
  op_time: "",
  cl_time: "",
});

function cleanForm() {
  form.reset();
  location.reload();
  toastr.success("Footer Data Add Successfully")
}

const submit = () => {
  form.post(route("admin.footer.store"), {
    onSuccess: () => cleanForm(),
  });
};
</script>

<template>
  <AuthenticatedLayout>
    <section class="bg-gray-200 min-h-[100vh]">
      <div class="min-h-[100vh] justify-center items-center gap-5 p-8">
        <div class="w-full bg-gray-200 p-5 rounded-2xl drop-shadow-2xl mx-auto">
          <div v-if="footers.data.length > 0" class="p-6">
            <div v-for="fo in footers.data" :key="fo.id">
              <div class="flex justify-end">
                <Link
                  :href="route('admin.footer.edit', fo.id)"
                  class="bg-blue-600 text-white px-5 py-2 rounded-xl"
                  ><i class="fa-solid fa-pen-to-square"></i
                ></Link>
              </div>
              <h3 class="mb-3"><b>Address :-</b> {{ fo.address }}</h3>
              <p class="mb-3"><b>Phone :-</b> {{ fo.phone }}</p>
              <p class="mb-3"><b>Email :-</b> {{ fo.email }}</p>
              <p class="mb-3"><b>Facebook :-</b> {{ fo.facebook }}</p>
              <p class="mb-3"><b>Twitter :-</b> {{ fo.twitter }}</p>
              <p class="mb-3"><b>Instagram :-</b> {{ fo.instagram }}</p>
              <p class="mb-3"><b>Youtube :-</b> {{ fo.youtube }}</p>
              <p class="mb-3"><b>Linkedin :-</b> {{ fo.linkedin }}</p>
              <p class="mb-3"><b>Open Time :-</b> {{ fo.op_time }}</p>
              <p class="mb-3"><b>Close Time :-</b> {{ fo.cl_time }}</p>
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
                  <i class="fa-solid fa-gear"></i> Footer Data
                </h2>
              </div>


              <div class="mb-3">
                <InputLabel for="address" value="Address" />
                <TextInput
                  type="address"
                  v-model="form.address"
                  id="address"
                  placeholder="Enter Address"
                />
                <InputError :message="form.errors.address" />
              </div>


              <div class="mb-3">
                <InputLabel for="phone" value="phone" />
                <TextInput
                  type="tel"
                  v-model="form.phone"
                  id="phone"
                  placeholder="Enter Phone"
                />
                <InputError :message="form.errors.phone" />
              </div>

              <div class="mb-3">
                <InputLabel for="email" value="Email" />
                <TextInput
                  type="email"
                  v-model="form.email"
                  id="email"
                  placeholder="Enter Email"
                />
                <InputError :message="form.errors.email" />
              </div>

              <div class="mb-3">
                <InputLabel for="facebook" value="Facebook" />
                <TextInput
                  type="url"
                  v-model="form.facebook"
                  id="facebook"
                  placeholder="Enter Facebook Link"
                />
                <InputError :message="form.errors.facebook" />
              </div>

              <div class="mb-3">
                <InputLabel for="twitter" value="Twitter" />
                <TextInput
                  type="url"
                  v-model="form.twitter"
                  id="twitter"
                  placeholder="Enter Twitter Link"
                />
                <InputError :message="form.errors.twitter" />
              </div>

              <div class="mb-3">
                <InputLabel for="instagram" value="Instagram" />
                <TextInput
                  type="url"
                  v-model="form.instagram"
                  id="instagram"
                  placeholder="Enter Instagram Link"
                />
                <InputError :message="form.errors.instagram" />
              </div>

              <div class="mb-3">
                <InputLabel for="youtube" value="Youtube" />
                <TextInput
                  type="url"
                  v-model="form.youtube"
                  id="youtube"
                  placeholder="Enter Youtube Link"
                />
                <InputError :message="form.errors.youtube" />
              </div>

              <div class="mb-3">
                <InputLabel for="linkedin" value="Linkedin" />
                <TextInput
                  type="url"
                  v-model="form.linkedin"
                  id="linkedin"
                  placeholder="Enter Linkedin Link"
                />
                <InputError :message="form.errors.linkedin" />
              </div>

              <div class="mb-3">
                <InputLabel for="op_time" value="Open Time" />
                <TextInput
                  type="time"
                  v-model="form.op_time"
                  id="op_time"
                  placeholder="Enter Open Time"
                />
                <InputError :message="form.errors.op_time" />
              </div>

              <div class="mb-3">
                <InputLabel for="cl_time" value="Close Time" />
                <TextInput
                  type="time"
                  v-model="form.cl_time"
                  id="cl_time"
                  placeholder="Enter Open Time"
                />
                <InputError :message="form.errors.cl_time" />
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
