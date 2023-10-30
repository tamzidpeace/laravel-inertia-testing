<template>
    <div>
        <h1>Hello {{ x }}</h1>
        <h2>{{ name }}</h2>
        <h2>{{ name }}</h2>
       <Link href="/details">Details</Link>
       <div class="bg-red-600">
        Hello World
       </div>
    </div>
</template>

<script setup lang="ts">
import { storeToRefs } from "pinia";
import { useAppStore } from "../app/store/appStore";
import { Link } from "@inertiajs/vue3";

const x: number = 12345;
const store = useAppStore();

const { name } = storeToRefs(store);
</script>

<style scoped></style>
