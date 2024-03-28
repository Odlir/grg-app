<script setup>
import Pagination from "@/Components/Pagination.vue";
import Table from "@/Components/Table.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import CreateEditModal from "@/Pages/ProductsCategory/CreateEdit.vue";
import LayoutAuthenticated from "@/layouts/LayoutAuthenticated.vue";
import SectionMain from "@/Components/SectionMain.vue";
import { ref } from "vue";
import { useForm, router } from "@inertiajs/vue3";
import Swal from "sweetalert2";

const props = defineProps({
    categories: Object,
});

const cols = [
    { headerName: "Nombre", colName: "name", isSearchable: true },
    { headerName: "Descripción", colName: "description", isSearchable: true },
];

const modalRegEditRef = ref(null);

const form = useForm({
    id: "",
});

const onChangeFilters = (filters) => {
    const queryParams = {};

    filters.forEach((filter) => {
        queryParams[filter.colName] = filter.value;
    });

    router.get("/products_category", queryParams, {
        preserveState: true,
    });
};

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
                form.delete(route("products_category.destroy", id));
            }
        });
};
</script>

<template>
    <LayoutAuthenticated>
        <SectionMain>
            <div class="mt-3 mb-3 text-right">
                <PrimaryButton @click="openModal()">
                    <i class="fa-solid fa-plus-circle"></i> Registrar
                </PrimaryButton>
            </div>
            <div class="pt-3">
                <Table
                    :data="categories.data"
                    :cols="cols"
                    @onClickEdit="openModal"
                    @onClickDelete="deleteRow"
                    @update:filters="onChangeFilters"
                >
                </Table>
                <Pagination :links="categories.links" />
            </div>
            <CreateEditModal ref="modalRegEditRef"></CreateEditModal>
        </SectionMain>
    </LayoutAuthenticated>
</template>

<style scoped></style>
