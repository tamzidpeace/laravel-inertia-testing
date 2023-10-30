<template>
    <div>
        <h1>Hello {{ x }}</h1>
        <h2>{{ name }}</h2>
        <h2>{{ name }}</h2>
        <Link href="/details">Details</Link>

        <!-- prime vue test -->
        <br />
        <Button label="Submit" />

        <div class="card">
            <Card>
                <template #title> Simple Card </template>
                <template #content>
                    <p class="m-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Inventore sed consequuntur error repudiandae
                        numquam deserunt quisquam repellat libero asperiores
                        earum nam nobis, culpa ratione quam perferendis esse,
                        cupiditate neque quas!
                    </p>
                </template>
            </Card>
        </div>
    </div>
</template>

<script setup lang="ts">
import { storeToRefs } from "pinia";
import { useAppStore } from "../app/store/appStore";
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import Button from "primevue/button";
import Card from "primevue/card";

const x: number = 12345;
const store = useAppStore();

const { name } = storeToRefs(store);
</script>

<style scoped></style>
