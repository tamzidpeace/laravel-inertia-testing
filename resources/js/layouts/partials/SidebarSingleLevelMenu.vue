<template>
    <li>
        <Link
            :href="href"
            class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group"
            :class="{ 'bg-gray-100 text-blue-500': active }"
        >
            <slot> </slot>
            <span class="ml-3 text-sm tracking-wide truncate">{{ label }}</span>
        </Link>
    </li>
</template>

<script setup lang="ts">
import { Link } from "@inertiajs/vue3";

interface Props {
    href: string;
    label: string;
    active: boolean
}

withDefaults(defineProps<Props>(), {
    href: "#",
    label: "label",
    active: false
});
</script>

<style scoped></style>
