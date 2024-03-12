<script setup>
import { Head, Link } from "@inertiajs/vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import Pagination from "@/Components/Pagination.vue";
import Table from "@/Components/Table.vue";
import Rating from "@/Components/Rating.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import CreateEditModal from "@/Pages/People/CreateEdit.vue";
import LayoutAuthenticated from "@/layouts/LayoutAuthenticated.vue";
import SectionMain from "@/components/SectionMain.vue";
import { ref } from "vue";
import { useForm } from "@inertiajs/vue3";
import Swal from "sweetalert2";

const props = defineProps({
    people: Object,
});

const headers = [
    "Razon Social",
    "Documento",
    "Tipo",
    "Calificacion",
    "Telefono",
];
const cols = ["nombre_legal", "docdesc", "perdesc", "rating", "telefono"];
const modalRegEditRef = ref(null);

const form = useForm({
    id: "",
});

const openModal = (form = null) => {
    modalRegEditRef.value.open(form);
};

const deleteRow = (id) => {
    const alerta = Swal.mixin({
        buttonsStyling: true,
    });
    alerta
        .fire({
            title: "Desea eliminar este registro?",
            icon: "question",
            showCancelButton: true,
            confirmButtonText: '<i class="fa-solid fa-check"></i> Si, seguro',
            cancelButtonText: '<i class="fa-solid fa-ban"></i> Cancelar',
        })
        .then((result) => {
            if (result.isConfirmed) {
                form.delete(route("people.destroy", id));
            }
        });
};
</script>

<template>
    <LayoutAuthenticated>
        <SectionMain>
            <div class="mt-3 mb-3">
                <PrimaryButton @click="openModal()">
                    <i class="fa-solid fa-plus-circle"></i> Registrar
                </PrimaryButton>
            </div>
            <div class="pt-3">
                <Table
                    :data="people.data"
                    :headers="headers"
                    :cols="cols"
                    @onClickEdit="openModal"
                    @onClickDelete="deleteRow"
                >
                    <template #cell(docdesc)="{ value, item }">
                        <strong>{{ item.docdesc.toUpperCase() }}</strong>
                        {{ item.nro_documento }}
                    </template>

                    <template #cell(perdesc)="{ value, item }">
                        {{ item.persontype.map(function(item) {
                            return item.descripcion;
                        }).join(", ") }}
                    </template>

                    <template #cell(calificacion)="{ value, item }">
                        <Rating :size="sm" :rating="item.calificacion" />
                    </template>
                </Table>
                <Pagination :links="people.links" />
            </div>
            <CreateEditModal ref="modalRegEditRef"></CreateEditModal>
        </SectionMain>
    </LayoutAuthenticated>
</template>

<style scoped></style>
