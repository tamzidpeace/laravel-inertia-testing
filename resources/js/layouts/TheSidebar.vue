<template>
    <aside
        id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 shadow"
        aria-label="Sidebar"
    >
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
            <ul class="space-y-2 font-medium">
                <SidebarSingleLink
                    label="Dashboard"
                    href="/"
                    :active="$page.url === '/'"
                >
                    <Squares2X2Icon class="h-5 w-5" />
                </SidebarSingleLink>

                <SidebarSingleLink
                    label="About"
                    href="/about"
                    :active="$page.url === '/about'"
                >
                    <InformationCircleIcon class="h-5 w-5" />
                </SidebarSingleLink>

                <li>
                    <div class="flex flex-col justify-start space-y-2">
                        <div
                            class="flex justify-between items-center cursor-pointer hover:bg-gray-100 p-2 rounded-md"
                            @click="rotate = !rotate"
                        >
                            <div
                                class="flex justify-start space-x-3 items-center"
                            >
                                <InformationCircleIcon class="h-5 w-5" />
                                <span class="text-sm tracking-wide truncate"
                                    >Multi Level</span
                                >
                            </div>

                            <ChevronDownIcon
                                class="h-5 w-5 transition-all delay-150 duration-200 ease-in-out"
                                :class="rotate ? 'rotate-180' : ''"
                            />
                        </div>

                        <div
                            v-if="rotate"
                            class="flex flex-col justify-start space-y-2"
                        >
                            <div class="ml-8">
                                <SidebarSingleLink
                                    label="Dashboard"
                                    href="/"
                                    :active="$page.url === '/'"
                                >
                                    <Squares2X2Icon class="h-5 w-5" />
                                </SidebarSingleLink>
                            </div>
                            <div class="ml-8">
                                <SidebarSingleLink
                                    label="About"
                                    href="/about"
                                    :active="$page.url === '/about'"
                                >
                                    <InformationCircleIcon class="h-5 w-5" />
                                </SidebarSingleLink>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
</template>

<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import {
    Squares2X2Icon,
    HomeIcon,
    InformationCircleIcon,
    ChevronDownIcon,
} from "@heroicons/vue/24/solid";
import SidebarSingleLink from "./partials/SidebarSingleLevelMenu.vue";
import PanelMenu from "primevue/panelmenu";

const rotate = ref(false);
</script>

<style scoped></style>
