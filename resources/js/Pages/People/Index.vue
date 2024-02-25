<script lang="ts" setup>
import { Head, Link } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import Pagination from "@/Components/Pagination.vue";
import Table from "@/Components/Table.vue";
import Rating from "@/Components/Rating.vue";

const props = defineProps({
    people: Object,
});
const newData = props.people.data;

const headers = ['Razon Social', 'Documento', 'Tipo', 'Calificacion', 'Telefono'];
const cols = ['nombre_legal', 'docdesc', 'perdesc', 'calificacion', 'telefono'];

</script>

<template>
    <AppLayout title="Cliente">
        <div class="pt-3">
            <Table :data="newData" :headers="headers" :cols="cols">
                <template #cell(docdesc)="{ value, item }">
                    <strong>{{ item.docdesc.toUpperCase() }}</strong>
                    {{ item.nro_documento }}
                </template>
                <template #cell(calificacion)="{ value, item }">
                    <Rating :size="sm" :rating="item.calificacion" />
                </template>
            </Table>
            <Pagination :pagination="people.meta" />
        </div>
    </AppLayout>
</template>

<style scoped>

</style>
