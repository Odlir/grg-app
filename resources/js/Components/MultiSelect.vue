<script setup>
import { ref, computed, watchEffect, onMounted, onUnmounted } from "vue";

const props = defineProps(["modelValue", "options"]);
const emit = defineEmits(["update:modelValue"]);

const isOpen = ref(false);
const selectedOptions = ref(props.modelValue || []);
const dropdownRef = ref(null);

const buttonTitle = computed(() => {
    if (selectedOptions.value.length === 0) {
        return "Seleccione";
    } else {
        console.log('select', selectedOptions.value)
        return selectedOptions.value
            .map((item) => {
                const option = props.options.find(
                    (option) => option.id === item
                );
                return option ? option.descripcion : "";
            })
            .filter((descripcion) => descripcion !== "")
            .join(", ");
    }
});

const toggleDropdown = () => {
  isOpen.value = !isOpen.value;
};

const handleClickOutside = (event) => {
  if (!dropdownRef.value.contains(event.target)) {
    isOpen.value = false;
  }
};

onMounted(() => {
  document.addEventListener('click', handleClickOutside);
});

onUnmounted(() => {
  document.removeEventListener('click', handleClickOutside);
});

watchEffect(() => {
  emit('update:modelValue', selectedOptions.value);
});

</script>

<template>
    <div class="relative" ref="dropdownRef" @click="toggleDropdown">
        <button
            class="border border-gray-300 dark:bg-slate-700 text-gray-700 dark:text-gray-300 px-4 py-2 rounded-md focus:outline-none focus:bg-gray-300 dark:focus:bg-gray-700"
        >
            {{ buttonTitle }}
        </button>
        <div
            v-if="isOpen"
            class="absolute z-10 mt-2 w-48 bg-white dark:bg-slate-700 border border-gray-300 dark:border-gray-700 shadow-lg rounded-md py-1"
            @click.stop
        >
            <label
                v-for="(option, index) in options"
                :key="index"
                class="flex items-center px-4 py-2"
            >
                <input
                    type="checkbox"
                    v-model="selectedOptions"
                    :value="option.id"
                    class="mr-2 leading-tight"
                    @click.stop
                />
                <span class="text-sm dark:text-white">{{ option.descripcion }}</span>
            </label>
        </div>
    </div>
</template>
