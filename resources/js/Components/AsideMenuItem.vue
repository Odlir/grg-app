<script setup>
import { ref, computed } from 'vue';
import { Link } from '@inertiajs/vue3';
import { mdiMinus, mdiPlus } from '@mdi/js';
import { getButtonColor } from '@/colors.js';
import BaseIcon from '@/components/BaseIcon.vue';
import AsideMenuList from '@/components/AsideMenuList.vue';
import { useDarkModeStore } from '@/stores/darkMode.js';

const props = defineProps({
  item: {
    type: Object,
    required: true
  },
  isDropdownList: Boolean
})

let routeName, routeParams;
if (props.item.route && typeof (props.item.route) === "object") {
    routeName = props.item.route[0];
    routeParams = props.item.route[1];
} else if (props.item.route) {
    routeName = props.item.route;
}

const itemHref = computed(() => (props.item.route ? route(routeName, routeParams) : props.item.href));

const emit = defineEmits(['menu-click']);

const darkModeStore = useDarkModeStore();

const hasColor = computed(() => props.item && props.item.color)

const asideMenuItemActiveStyle = computed(() =>
  hasColor.value ? '' : 'aside-menu-item-active font-bold'
)

const activeInactiveStyle = computed(() =>
    props.item.route && route().current(routeName)
        ? darkModeStore.asideMenuItemActiveStyle
        : ''
);

const isDropdownActive = ref(false)

const componentClass = computed(() => [
  props.isDropdownList ? 'py-3 px-6 text-sm' : 'py-3',
  hasColor.value
    ? getButtonColor(props.item.color, false, true)
    : `aside-menu-item dark:text-slate-300 dark:hover:text-white`
])

const hasDropdown = computed(() => !!props.item.menu)

const menuClick = (event) => {
  emit('menu-click', event, props.item)

  if (hasDropdown.value) {
    isDropdownActive.value = !isDropdownActive.value
  }
}
</script>

<template>
  <li>
    <component
      :is="props.item.route ? Link : 'a'"
      :href="itemHref"
      :target="props.item.target ?? null"
      class="flex cursor-pointer"
      :class="componentClass"
      @click="menuClick"
    >
      <BaseIcon
        v-if="props.item.icon"
        :path="props.item.icon"
        class="flex-none"
        :class="activeInactiveStyle"
        w="w-16"
        :size="18"
      />
      <span
        class="grow text-ellipsis line-clamp-1"
        :class="[{ 'pr-12': !hasDropdown }, activeInactiveStyle]"
        >{{ props.item.label }}</span
      >
      <BaseIcon
        v-if="hasDropdown"
        :path="isDropdownActive ? mdiMinus : mdiPlus"
        class="flex-none"
        :class="activeInactiveStyle"
        w="w-12"
      />
    </component>
    <AsideMenuList
      v-if="hasDropdown"
      :menu="props.item.menu"
      :class="['aside-menu-dropdown', isDropdownActive ? 'block dark:bg-slate-800/50' : 'hidden']"
      is-dropdown-list
    />
  </li>
</template>
