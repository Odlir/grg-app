<script setup>
import AsideMenuItem from '@/Components/AsideMenuItem.vue'

const props = defineProps({
  isDropdownList: Boolean,
  menu: {
    type: Array,
    required: true
  }
})

const emit = defineEmits(['menu-click'])

const menuClick = (event, item) => {
  emit('menu-click', event, item)
}
</script>

<template>
  <ul>
    <AsideMenuItem
      v-for="(item, index) in props.menu"
      :key="index"
      :item="item"
      :is-dropdown-list="props.isDropdownList"
      @menu-click="menuClick"
    />
  </ul>
</template>
