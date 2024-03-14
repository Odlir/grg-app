<script setup>
import {
    FwbA,
    FwbTable,
    FwbTableBody,
    FwbTableCell,
    FwbTableHead,
    FwbTableHeadCell,
    FwbTableRow,
} from "flowbite-vue";
import TableActions from "@/Components/TableActions.vue";
import { ref, nextTick } from "vue";
import SecondaryButton from "./SecondaryButton.vue";
import debounce from "@/utils/debounce";

const props = defineProps({
    data: Array,
    cols: Array,
});

const emit = defineEmits(['update:filters']);

const searchActive = ref(false);
const inputRefs = ref([]);

const toggleSearch = (index) => {
    searchActive.value = !searchActive.value;
    if (searchActive.value) {
        nextTick().then(() => {
            inputRefs.value[index].focus();
        });
    }
    handleInput();
};

const handleInput = debounce(() => {
    const filters = inputRefs.value.map((input)=>({colName: input.name, value: input.value}))
    emit('update:filters', filters)
}, 300);
</script>
<template>
    <SecondaryButton @click="toggleSearch" v-if="searchActive" class="mb-5">
        Cerrar filtros
        <svg
            data-v-5e29cf2a=""
            aria-hidden="true"
            focusable="false"
            data-prefix="fal"
            data-icon="xmark"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 320 512"
            class="svg-inline--fa fa-xmark h-5 ml-2"
        >
            <path
                data-v-5e29cf2a=""
                fill="currentColor"
                d="M315.3 411.3c-6.253 6.253-16.37 6.253-22.63 0L160 278.6l-132.7 132.7c-6.253 6.253-16.37 6.253-22.63 0c-6.253-6.253-6.253-16.37 0-22.63L137.4 256L4.69 123.3c-6.253-6.253-6.253-16.37 0-22.63c6.253-6.253 16.37-6.253 22.63 0L160 233.4l132.7-132.7c6.253-6.253 16.37-6.253 22.63 0c6.253 6.253 6.253 16.37 0 22.63L182.6 256l132.7 132.7C321.6 394.9 321.6 405.1 315.3 411.3z"
            ></path>
        </svg>
    </SecondaryButton>
    <fwb-table hoverable>
        <fwb-table-head class="bg-amber-300">
            <fwb-table-head-cell
                class="font-black"
                v-for="(col, index) in cols"
            >
                <template
                    v-if="
                        !col.isSearchable || (!searchActive && col.isSearchable)
                    "
                    >{{ col.headerName }}</template
                >
                <template v-if="!searchActive && col.isSearchable">
                    <svg
                        @click="toggleSearch(index)"
                        class="svg-icon search-icon w-5 inline-block ml-0.5"
                        aria-labelledby="title desc"
                        role="img"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 19.9 19.7"
                    >
                        <title id="title">Search Icon</title>
                        <desc id="desc">A magnifying glass icon.</desc>
                        <g class="search-path" fill="none" stroke="#848F91">
                            <path
                                stroke-linecap="square"
                                d="M18.5 18.3l-5.4-5.4"
                            />
                            <circle cx="8" cy="8" r="7" />
                        </g>
                    </svg>
                </template>
                <label
                    class="relative block"
                    v-if="searchActive && col.isSearchable"
                >
                    <input
                        ref="inputRefs"
                        type="text"
                        :placeholder="col.headerName"
                        :name="col.colName"
                        class="text-xs placeholder:uppercase focus:ring focus:outline-none rounded bg-transparent"
                        @input="handleInput(index)"
                    />
                </label>
            </fwb-table-head-cell>
            <fwb-table-head-cell>
                <span class="sr-only">Acciones</span>
            </fwb-table-head-cell>
        </fwb-table-head>
        <fwb-table-body>
            <fwb-table-row v-for="row in data" :key="row.id">
                <fwb-table-cell v-for="(col, ind) in cols" :key="ind">
                    <slot
                        :name="`cell(${col.colName})`"
                        :value="row[col.colName]"
                        :item="row"
                    >
                        {{ row[col.colName] }}
                    </slot>
                </fwb-table-cell>
                <fwb-table-cell class="center-items">
                    <fwb-a href="#">
                        <TableActions
                            @onClickEdit="$emit('onClickEdit', row.id)"
                            @onClickDelete="$emit('onClickDelete', row.id)"
                        />
                    </fwb-a>
                </fwb-table-cell>
            </fwb-table-row>
        </fwb-table-body>
    </fwb-table>
</template>

<style scoped></style>
