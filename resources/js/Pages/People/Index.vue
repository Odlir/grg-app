<script lang="ts" setup>

import { Head, Link } from "@inertiajs/vue3";


import AppLayout from "@/Layouts/AppLayout.vue";
import Pagination from "@/Components/Pagination.vue";
import Table from "@/Components/Table.vue";
import Rating from "@/Components/Rating.vue";

import PrimaryButton from '@/Components/PrimaryButton.vue';
import CreateEditModal from "@/Pages/People/CreateEdit.vue";
import { ref } from 'vue';


const props = defineProps({
    people: Object,
});

const newData = props.people.data;


const headers = ['Razon Social', 'Documento', 'Tipo', 'Calificacion', 'Telefono'];
const cols = ['nombre_legal', 'docdesc', 'perdesc', 'rating', 'telefono'];
const modalRegEditRef = ref(null);

const openModal = (form = null) =>{
    modalRegEditRef.value.open(form);
}


</script>

<template>
    <AppLayout title="Cliente">
        <div class="mt-3 mb-3">
            <PrimaryButton @click="openModal()">
                <i class="fa-solid fa-plus-circle"></i> Registrar
            </PrimaryButton>
        </div>
        <div class="pt-3">

            <Table :data="people.data" :headers="headers" :cols="cols" @onClickEdit="openModal">

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
    <CreateEditModal ref="modalRegEditRef"></CreateEditModal>
</template>

<style scoped>

</style>
