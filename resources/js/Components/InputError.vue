<script setup>
defineProps(['message']);
</script>

<template>
    <div v-show="message">
        <p class="text-sm text-red-600 mt-1 ml-2">
            {{ message }}
        </p>
    </div>
</template>
