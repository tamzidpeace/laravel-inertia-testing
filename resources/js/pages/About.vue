<template>
    <div>About</div>
</template>

<script>
import AppLayout from "@/layouts/BaseLayout.vue";

export default {
    layout: AppLayout,
};
</script>

<script setup>
import { ref } from "vue";

const title = ref("Home");
</script>

<style scoped></style>
