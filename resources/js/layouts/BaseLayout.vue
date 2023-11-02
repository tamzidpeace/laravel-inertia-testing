<template>
    <div class="bg-[#eff3f7]">
        <TheNavbar />
        <TheSidebar />

        <div class="p-4 sm:ml-64 pt-[72px]">
            <div class="layout-main-container">
                <div class="layout-main">
                    <slot />
                </div>
                <AppFooter />
            </div>
        </div>

        <TheFooter />
    </div>
</template>

<script setup lang="ts">
import TheFooter from "./TheFooter.vue";
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

.layout-main-container {
    display: flex;
    flex-direction: column;
    min-height: 80vh;
    justify-content: space-between;
    /* padding: 7rem 2rem 2rem 4rem; */
    transition: margin-left 0.2s;
}

.layout-main {
    flex: 1 1 auto;
}
</style>
