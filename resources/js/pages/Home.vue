<template>
    <div>Home Page</div>
    <div>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo dicta eveniet libero veritatis est, architecto deleniti doloribus reiciendis ipsa, perferendis repellat possimus saepe delectus! Est iste et veritatis eum tempora?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo dicta eveniet libero veritatis est, architecto deleniti doloribus reiciendis ipsa, perferendis repellat possimus saepe delectus! Est iste et veritatis eum tempora?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo dicta eveniet libero veritatis est, architecto deleniti doloribus reiciendis ipsa, perferendis repellat possimus saepe delectus! Est iste et veritatis eum tempora?

        <Link class="nav-link" :href="route('about')">About</Link>
    </div>
</template>



<script setup>
import { ref } from "vue";
import { Link } from '@inertiajs/vue3';
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
