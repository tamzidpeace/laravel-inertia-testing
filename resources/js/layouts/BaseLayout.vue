<template>
    <div>
        <TheNavbar />
        <TheSidebar />

        <div class="p-4 sm:ml-64 pt-[72px]">
            <slot />
        </div>
    </div>
</template>

<script setup lang="ts">
import TheNavbar from "./navbar/TheNavbar.vue";
import TheSidebar from "./sidebar/TheSidebar.vue";
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
