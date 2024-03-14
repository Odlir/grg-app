<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    links: Object
});

</script>
<template>
    <div class="flex items-center justify-center text-center my-3">
        <nav class="relative flex justify-center">
            <Link
                preserve-state
                preserve-scroll
                :href="links[0].url ?? ''"
                v-html="links[0].label"
                class="flex items-center px-3 py-2 text-sm rounded-lg text-blue-500 bg-amber-300 mr-2"
                :class="{ 'bg-gray-200' : links[0].active,
                 '!text-gray-400 disabled:opacity-75': !links[0].url}"
            />
            <Link
                preserve-state
                preserve-scroll
                :href="links[links.length - 1].url"
                v-html="links[links.length - 1].label"
                class="flex items-center px-3 py-2 text-sm rounded-lg text-blue-500 bg-amber-300"
                :class="{ 'bg-gray-200' : links[links.length - 1].active,
                 '!text-gray-400 disabled:opacity-75': !links[links.length - 1].url }"
            />
        </nav>
    </div>
</template>
