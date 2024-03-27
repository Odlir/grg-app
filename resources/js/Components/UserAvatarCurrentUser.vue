<script setup>
import { computed } from 'vue';
import { usePage } from '@inertiajs/vue3';
import { useMainStore } from '@/stores/main';
import UserAvatar from '@/Components/UserAvatar.vue';

const userName = computed(() => usePage().props.auth.user.name)
/*const mainStore = useMainStore()*/
</script>

<template>
  <UserAvatar :username="userName" api="initials">
    <slot />
  </UserAvatar>
</template>
