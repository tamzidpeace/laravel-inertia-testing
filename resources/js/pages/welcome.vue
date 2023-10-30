<template>
    <div>
        <h1>Hello {{ x }}</h1>
        <h2>{{ name }}</h2>
        <h2>{{ name }}</h2>
        <Link href="/details">Details</Link>
        <div class="bg-red-600 text-blue-700">Hello World</div>

        <a-button type="primary">Primary Button</a-button>
        <a-date-picker  />


        <div class="card">
        <DataTable :value="products" tableStyle="min-width: 50rem" :paginator="true" :rows="10" :show-gridlines="true">
            <Column field="code" header="Code"></Column>
            <Column field="name" header="Name"></Column>
            <Column field="category" header="Category"></Column>
            <Column field="quantity" header="Quantity"></Column>
        </DataTable>
    </div>
    </div>
</template>

<script setup lang="ts">
import { storeToRefs } from "pinia";
import { useAppStore } from "../app/store/appStore";
import { Link } from "@inertiajs/vue3";
// import Button from "primevue/button";
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import { ref } from "vue";

const x: number = 12345;
const store = useAppStore();

const { name } = storeToRefs(store);
const products = ref([
    {
        code: '001',
        name: 'Product 1',
        category: 'Category 1',
        quantity: 10
    },
    {
        code: '002',
        name: 'Product 2',
        category: 'Category 2',
        quantity: 20
    }
]);
</script>

<style scoped></style>
