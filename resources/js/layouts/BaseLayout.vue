<template>
    <div>
        <TheNavbar/>
        <!-- <TheSidebar/> -->


        <div class="app-page">

        <div class="app-page__inner">
            <slot />
        </div>
    </div>
    </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import TheNavbar from './TheNavbar.vue';
import TheSidebar from './TheSidebar.vue';
</script>

<style scoped>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

li {
    display: inline;
    margin-right: 12px;
}
</style>
