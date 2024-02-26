<script setup>
import { FwbRating } from 'flowbite-vue';

const props = defineProps({
    rate: Number,
    size: String,
});

</script>

<template>
    <fwb-rating :size="size" :rating="rate" />
</template>
