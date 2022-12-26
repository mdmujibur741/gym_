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
  footer: Object,
});

const form = useForm({
  address: props.footer?.address,
  phone: props.footer?.phone,
  email: props.footer?.email,
  facebook: props.footer?.facebook,
  twitter: props.footer?.twitter,
  instagram: props.footer?.instagram,
  youtube: props.footer?.youtube,
  linkedin: props.footer?.linkedin,
  op_time: props.footer?.op_time,
  cl_time: props.footer?.cl_time,
});

function cleanForm() {
  form.reset();
  location.reload();
  toastr.success("Footer Data Update Successfully");
}

const submit = () => {
  Inertia.post(
    `/admin/footer/${props.footer.id}`,
    {
      _method: "put",
      address: form.address,
      phone: form.phone,
      email: form.email,
      facebook: form.facebook,
      twitter: form.twitter,
      instagram: form.instagram,
      youtube: form.youtube,
      linkedin: form.linkedin,
      op_time: form.op_time,
      cl_time: form.cl_time,
    },
    {
      onSuccess: () => cleanForm(),
    }
  );
};
</script>

<template>
  <AuthenticatedLayout>
    <section class="bg-gray-200 min-h-[100vh]">
      <div class="min-h-[100vh] justify-center items-center gap-5 p-8">
        <div class="w-full bg-gray-200 p-5 rounded-2xl drop-shadow-2xl mx-auto">
          <!-- Footer Data Edit-->
          <div class="p-6">
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
                  >Update</PrimaryButton
                >
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </AuthenticatedLayout>
</template>
