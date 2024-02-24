<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="mt-3 mb-7 w-100 h-screen rounded-lg bg-blue-300 dark:bg-inherit">
            <Welcome />
        </div>
    </AppLayout>
</template>
