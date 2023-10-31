<template>
    <div>
        <nav>
            <ul>
                <li><Link href="/">Home</Link></li>
                <li><Link href="about">About</Link></li>
            </ul>
        </nav>

        <div class="app-page">
        <Notice />

        <div class="app-page__inner">
            <slot />
        </div>
    </div>
    </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
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
