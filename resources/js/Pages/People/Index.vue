<script setup>
import { Head, Link } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import Pagination from "@/Components/Pagination.vue";
import Table from "@/Components/Table.vue";

const props = defineProps({
    people: Array,
});
const newData = props.people.data.map(d => ({...d, documento: `<strong>${d.docdesc.toUpperCase()}</strong> ${d.nro_documento}`}));
const headers = ['Razon Social', 'Documento', 'Tipo', 'Telefono'];
const cols = ['nombre_legal', 'documento', 'perdesc', 'telefono'];

</script>

<template>
    <AppLayout title="Cliente">
        <div class="pt-3">
            <Table :data="newData" :headers="headers" :cols="cols"/>
            <Pagination :pagination="people.meta" />
        </div>
    </AppLayout>
</template>

<style scoped>

</style>
