<script setup>
import {
    FwbA,
    FwbTable,
    FwbTableBody,
    FwbTableCell,
    FwbTableHead,
    FwbTableHeadCell,
    FwbTableRow,
} from 'flowbite-vue';
import EditIcon from "@/Components/EditIcon.vue";

const props = defineProps({
    data: Array,
    headers: Array,
    cols: Array,
})
</script>
<template>
    <fwb-table hoverable>
        <fwb-table-head class="bg-amber-300">
            <fwb-table-head-cell class="font-black" v-for="header in headers">
                {{ header }}
            </fwb-table-head-cell>
            <fwb-table-head-cell>
                <span class="sr-only">Acciones</span>
            </fwb-table-head-cell>
        </fwb-table-head>
        <fwb-table-body>
            <fwb-table-row v-for="row in data" :key="row.id">
                <fwb-table-cell v-for="(col, ind) in cols" :key="ind">
                    <slot
                        :name="`cell(${col})`"
                        :value="row[col]"
                        :item="row"
                    >
                        {{ row[col] }}
                    </slot>
                </fwb-table-cell>
                <fwb-table-cell class="center-items">
                    <fwb-a href="#">
                        <EditIcon @click="$emit('onClickEdit', row.id);"/>
                    </fwb-a>
                </fwb-table-cell>
            </fwb-table-row>
        </fwb-table-body>
    </fwb-table>
</template>

<style scoped>

</style>
