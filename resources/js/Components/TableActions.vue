<script setup>
import { FwbDropdown, FwbListGroup, FwbListGroupItem } from "flowbite-vue";
</script>

<template>
    <fwb-dropdown placement="left">
        <template #trigger>
            <svg
                class="w-6 h-6 text-gray-800 dark:text-white"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
            >
                <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-width="2"
                    d="M12 6h0m0 6h0m0 6h0"
                />
            </svg>
        </template>
        <fwb-list-group>
            <fwb-list-group-item @click="$emit('onClickEdit')">
                Editar
            </fwb-list-group-item>
            <fwb-list-group-item @click="$emit('onClickDelete')">
                Eliminar
            </fwb-list-group-item>
        </fwb-list-group>
    </fwb-dropdown>
</template>

<style scoped></style>
