<script setup>
import Pagination from "@/Components/Pagination.vue";
import Table from "@/Components/Table.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import CreateEditModal from "@/Pages/Products/CreateEdit.vue";
import LayoutAuthenticated from "@/layouts/LayoutAuthenticated.vue";
import SectionMain from "@/Components/SectionMain.vue";
import { ref } from "vue";
import { useForm, router } from "@inertiajs/vue3";
import Swal from "sweetalert2";

const props = defineProps({
    products: Object,
});

const cols = [
    { headerName: "Codigo", colName: "code", isSearchable: true },
    { headerName: "Nombre", colName: "name", isSearchable: true },
    { headerName: "Unidad", colName: "unit_of_measure", isSearchable: true },
    { headerName: "Categoria", colName: "category", isSearchable: true },
    { headerName: "Costo", colName: "cost", isSearchable: false },
];

const modalRegEditRef = ref(null);

const form = useForm({
    id: "",
});

const onChangeFilters = (filters) => {
    const queryParams = {};

    filters.forEach(filter => {
        queryParams[filter.colName] =filter.value;
    });

    router.get(
        '/products',
        queryParams,
        {
            preserveState: true
        }
    );
}

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
                form.delete(route("products.destroy", id));
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
                    :data="products.data"
                    :cols="cols"
                    @onClickEdit="openModal"
                    @onClickDelete="deleteRow"
                    @update:filters="onChangeFilters"
                >
                    <template #cell(unit_of_measure)="{ value, item }">
                        {{item.unit_of_measure.description}}
                    </template>
                    <template #cell(warehouse)="{ value, item }">
                        {{item.warehouse.description}}
                    </template>
                    <template #cell(category)="{ value, item }">
                        {{item.category.description}}
                    </template>
                </Table>
                <Pagination :links="products.links" />
            </div>
            <CreateEditModal ref="modalRegEditRef"></CreateEditModal>
        </SectionMain>
    </LayoutAuthenticated>
</template>

<style scoped></style>
