<template>
    <div>Home Page</div>
</template>



<script setup>
import { ref } from "vue";
const title = ref("Home");
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

.app-page__inner {
    width: 94%;
    max-width: 900px;
    margin-right: auto;
    margin-left: auto;
    box-shadow: shadow(1);
    border-radius: radius(2);
    background-color: #fff;
}
</style>
