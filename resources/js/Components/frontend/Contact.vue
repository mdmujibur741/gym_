<script setup>
import InputLabe from "../InputLabel.vue";
import TextInput from "../TextInput.vue";
import InputError from "../InputError.vue";
import PrimaryButton from "../PrimaryButton.vue";
import { useForm } from "@inertiajs/inertia-vue3";
import { useToastr } from "../../tostr";


const toastr = useToastr();


const form = useForm({
  name: "",
  email: "",
  phone: "",
  message: "",
});

const submit = () => {
  form.post(route("web.contact.store"), {
    onSuccess: () => cleanForm(),

  });
function cleanForm(){
  form.reset()
  toastr.success('Submit, Thank You For Message');
}


};
</script>

<template>
  <section class="min-h-[85vh] bg-blue-300 flex items-center justify-center p-5">
    <div class="grid lg:grid-cols-2 gap-x-12">
      <!--  Google Map Location -->
      <div class="map overflow-hidden py-5">
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe
              width="550"
              height="450"
              id="gmap_canvas"
              src="https://maps.google.com/maps?q=moulvibazar&t=k&z=9&ie=UTF8&iwloc=&output=embed"
              frameborder="0"
              scrolling="no"
              marginheight="0"
              marginwidth="0"
              class="rounded-2xl border-4 border-gray-300"
            ></iframe
            ><a href="https://2piratebay.org">pirate bay</a><br />
            ><a href="https://www.embedgooglemap.net">embed map on website</a>
          </div>
        </div>
      </div>

      <!-- Contact  -->
      <div class="py-5">
        <div class="bg-violet-200 p-5 drop-shadow-lg rounded-2xl">
          <h2 class="font-bold text-3xl text-center my-6">CONTACT US</h2>

          <form @submit.prevent="submit">
            <div class="mb-3">
              <InputLabe for="name" value="NAME" />
              <TextInput v-model="form.name" id="name" placeholder="Enter Your Name" />
              <InputError :message="form.errors.name" />
            </div>

            <div class="mb-3">
              <InputLabe for="email" value="Email" />
              <TextInput v-model="form.email" id="email" placeholder="Enter Your Email" />
              <InputError :message="form.errors.email" />
            </div>

            <div class="mb-3">
              <InputLabe for="phone" value="Phone" />
              <TextInput v-model="form.phone" id="phone" placeholder="Enter Your Phone" />
              <InputError :message="form.errors.phone" />
            </div>

            <div class="mb-3">
              <InputLabe for="message" value="Message" />
              <textarea
                id=""
                v-model="form.message"
                rows="3"
                class="w-full rounded-xl"
                placeholder="Enter Your Message"
              ></textarea>
              <InputError :message="form.errors.message" />
            </div>

            <div class="text-center">
              <PrimaryButton
                class="bg-yellow-300 text-black px-6 py-3 rounded-xl hover:bg-white"
                :class="{ 'opacity-30': processing }"
                :disabled="processing"
              >
                <b> SUBMIT</b>
              </PrimaryButton>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.gmap_canvas {
  overflow: hidden;
  background: none !important;
  height: 450px;
  width: 550px;
}

.mapouter {
  position: relative;
  text-align: right;
  height: 450px;
  width: 550px;
}
</style>
