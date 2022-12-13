<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(['href', 'active']);

const classes = computed(() =>
    props.active
        ? 'flex items-center text-sm py-4 px-6 h-9 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out rounded-xl'
        : 'flex items-center text-sm py-4 px-6 h-9 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap hover:text-gray-900 hover:bg-gray-100 transition duration-300 ease-in-out rounded-xl'
);
</script>

<template>
    <Link :href="href" :class="classes" data-mdb-ripple="true" data-mdb-ripple-color="dark">
        <slot />
    </Link>
</template>
