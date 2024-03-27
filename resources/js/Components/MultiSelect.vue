<script setup>
import { ref, watchEffect } from "vue";
import vSelect from "vue-select";
import "vue-select/dist/vue-select.css";

const props = defineProps({
    modelValue: {
        type: [String, Boolean],
        default: [],
    },
    options: {
        type: Array,
        default: [],
    },
    searchable: {
        type: Boolean,
        default: true,
    },
    multiple: {
        type: Boolean,
        default: true,
    },
    label: {
        type: String,
        default: "description",
    },
});
const emit = defineEmits(["update:modelValue"]);

const selectedOptions = ref(props.modelValue || []);

watchEffect(() => {
    emit("update:modelValue", selectedOptions.value);
});
</script>

<template>
    <v-select
        :options="options"
        :label="label"
        :searchable="searchable"
        :multiple="multiple"
        :reduce="(option) => option.id"
        v-model="selectedOptions"
        class="dark:bg-slate-700  dark:border-gray-700 rounded-md py-1"
    ></v-select>
</template>

<style scoped>
:deep() {
    @media (prefers-color-scheme: dark) {
    --vs-controls-color: white;

    --vs-dropdown-bg: #282c34;
    --vs-dropdown-option-color: white;

    --vs-selected-bg: rgb(63 131 248);
    --vs-selected-color: #eeeeee;

    --vs-disabled-bg: initial;

    --vs-search-input-color: #eeeeee;
    --vs-dropdown-option--active-bg: rgb(63 131 248);
    }
}
</style>
