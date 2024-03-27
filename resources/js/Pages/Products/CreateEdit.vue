<script setup>
import Modal from "@/Components/Modal.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SelectInput from "@/Components/SelectInput.vue";
import FileInput from "@/Components/FileInput.vue";
import FormControl from "@/Components/FormControl.vue";
import MultiSelect from "@/Components/MultiSelect.vue";
import { useForm } from "@inertiajs/vue3";
import { ref, onMounted, watch } from "vue";
import Swal from "sweetalert2";

const modal = ref(false);
const unitsOfMeasure = ref(null);
const warehouses = ref(null);
const categories = ref(null);
const brands = ref(null);
const id = ref("");
const isOpenAdvancedOptions = ref(false);

const types = ref([
    { id: "product", description: "Producto" },
    { id: "service", description: "Servicio" },
]);

const form = useForm({
    id: null,
    code: "",
    name: "",
    cost: "",
    unit_of_measure_id: "",
    warehouses_detail: null,
    warehouses: null,
    type: "",
    image: "",
    imageURL: "",
    images: "",
    minimum_stock: "",
    initial_stock: 10,
    category_id: "",
    brands: null,
    method: "POST",
});

onMounted(() => {
    getCatalogue();
});

const getCatalogue = () => {
    axios.get(route("getUnitsOfMeasure")).then((response) => {
        unitsOfMeasure.value = response.data;
    });
    axios.get(route("getWarehouses")).then((response) => {
        warehouses.value = response.data;
    });
    axios.get(route("getProductCategories")).then((response) => {
        categories.value = response.data;
    });
    axios.get(route("getProductBrands")).then((response) => {
        brands.value = response.data;
    });
};

const closeModal = () => {
    modal.value = false;
    form.reset();
};

const open = (idProduct = null) => {
    id.value = idProduct;
    form.clearErrors();
    if (id.value) {
        getProduct();
    } else {
        modal.value = true;
        isOpenAdvancedOptions.value = false;
    }
};

const getProduct = () => {
    axios.get(route("products.show", id.value)).then((response) => {
        Object.assign(form, response.data);
        modal.value = true;
        isOpenAdvancedOptions.value = true;

        if (form.brands) {
            form.brands = form.brands.map((item) => item.id);
        }

        if (form.warehouses) {
            form.warehouses = form.warehouses.map((item) => item.id);
        }

        console.log("form", form);
    });
};

const save = () => {
    form.clearErrors();
    if (id.value) form.method = "PUT";
    form.post(route("products.store"), {
        onSuccess: () => {
            ok(
                !id.value
                    ? "Datos creados correctamente."
                    : "Datos actualizados correctamente."
            );
        },
    });
};

const ok = (msj) => {
    form.reset();
    closeModal();
    Swal.fire({ title: msj, icon: "success", confirmButtonText: "Aceptar" });
};

watch(
    () => form.warehouses,
    () => {
        if (form.warehouses) {
            const newWarehousesDetail = [];

            form.warehouses.forEach((warehouseId) => {
                const existingWarehouse = form.warehouses_detail.find(
                    (detail) => detail.warehouse_id === warehouseId
                );

                if (existingWarehouse) {
                    newWarehousesDetail.push(existingWarehouse);
                } else {
                    newWarehousesDetail.push({
                        warehouse_id: warehouseId,
                        initial_stock: 0,
                    });
                }
            });

            form.warehouses_detail = newWarehousesDetail.filter((detail) =>
                form.warehouses.includes(detail.warehouse_id)
            );
        }
    }
);

defineExpose({
    open,
});
</script>

<template>
    <Modal :show="modal" @close="closeModal">
        <h2 class="p-3 text-xl font-black text-hray-900 dark:text-white">
            {{ id ? "Editar producto" : "Nuevo producto" }}
        </h2>
        <hr />
        <div class="flex flex-wrap items-center mt-6">
            <div class="sm:w-6/12 w-full p-3 mt-1">
                <div class="sm:flex items-center justify-between">
                    <InputLabel for="name" value="Nombre *"></InputLabel>
                    <div class="sm:w-3/4">
                        <TextInput
                            id="name"
                            v-model="form.name"
                            type="text"
                            class="w-full"
                        ></TextInput>
                        <InputError
                            :message="form.errors.name"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
            <div class="sm:w-6/12 w-full p-3 mt-1">
                <div class="sm:flex items-center justify-between">
                    <InputLabel for="code" value="Codigo *"></InputLabel>
                    <div class="sm:w-3/4">
                        <TextInput
                            id="code"
                            v-model="form.code"
                            type="text"
                            class="w-full"
                        ></TextInput>
                        <InputError
                            :message="form.errors.code"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
            <div class="sm:w-6/12 w-full p-3 mt-1">
                <div class="sm:flex items-center justify-between">
                    <InputLabel for="cost" value="Costo *"></InputLabel>
                    <div class="sm:w-3/4">
                        <FormControl
                            id="cost"
                            v-model="form.cost"
                            inputmode="numeric"
                            type="number"
                            class="w-full"
                            onlyPositiveNumbers
                        />
                        <InputError
                            :message="form.errors.cost"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
            <div class="sm:w-6/12 w-full p-3 mt-1">
                <div class="sm:flex w-full items-center justify-between">
                    <InputLabel for="type" value="Tipo *"></InputLabel>
                    <div class="sm:w-3/4">
                        <SelectInput
                            id="type"
                            :options="types"
                            name="description"
                            v-model="form.type"
                            type="text"
                            class="w-full"
                        ></SelectInput>

                        <InputError
                            :message="form.errors.type"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
            <div class="sm:w-6/12 w-full p-3 mt-1">
                <div class="sm:flex w-full items-center justify-between">
                    <InputLabel
                        for="unit_of_measure"
                        value="Unidad *"
                    ></InputLabel>
                    <div class="sm:w-3/4">
                        <SelectInput
                            id="unit_of_measure"
                            :options="unitsOfMeasure"
                            name="description"
                            v-model="form.unit_of_measure_id"
                            type="text"
                            class="w-full"
                        ></SelectInput>

                        <InputError
                            :message="form.errors.unit_of_measure_id"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
            <div class="sm:w-6/12 w-full p-3 mt-1">
                <div class="sm:flex w-full items-center justify-between">
                    <InputLabel
                        for="category_id"
                        value="Categoría *"
                    ></InputLabel>
                    <div class="sm:w-3/4">
                        <SelectInput
                            id="category_id"
                            :options="categories"
                            name="name"
                            v-model="form.category_id"
                            type="text"
                            class="w-full"
                        ></SelectInput>

                        <InputError
                            :message="form.errors.category_id"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
            <div class="w-full p-3 mt-1">
                <div class="sm:flex w-full items-center justify-between">
                    <InputLabel
                        for="warehouses"
                        value="Almacenes *"
                    ></InputLabel>
                    <div class="sm:w-3/4">
                        <MultiSelect
                            id="warehouses"
                            class="w-full"
                            :options="warehouses"
                            label="name"
                            v-model="form.warehouses"
                        ></MultiSelect>

                        <InputError
                            :message="form.errors.warehouses"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
            <template v-if="form.warehouses">
                <div
                    class="sm:w-6/12 w-full p-3 mt-1"
                    v-for="(item, index) in form.warehouses_detail"
                    :key="index"
                >
                    <div class="sm:flex items-center justify-between">
                        <InputLabel
                            :for="`initial_stock${index}`"
                            :value="`Stock inicial - Almacén Nro ${index + 1}*`"
                        ></InputLabel>
                        <div class="sm:w-3/4">
                            <FormControl
                                :id="`initial_stock${index}`"
                                v-model="item.initial_stock"
                                type="number"
                                class="w-full"
                                onlyPositiveNumbers
                            />
                        </div>
                    </div>
                </div>
                <template v-for="(errorMessage, key) in form.errors">
                    <InputError
                        v-if="key.startsWith('warehouses_detail.')"
                        :key="key"
                        :message="errorMessage"
                        class="mt-2 w-full"
                    ></InputError>
                </template>
            </template>
        </div>
        <div class="flex flex-wrap items-center mt-6">
            <h5
                class="ml-3 dark:text-white cursor-pointer hover:underline w-full"
                @click="isOpenAdvancedOptions = !isOpenAdvancedOptions"
            >
                {{ isOpenAdvancedOptions ? "Ocultar" : "Ver" }} opciones
                avanzadas
            </h5>
            <template v-if="isOpenAdvancedOptions">
                <div class="w-full p-3 mt-1">
                    <div class="sm:flex items-center justify-between">
                        <InputLabel for="images" value="Imagen"></InputLabel>
                        <div class="sm:w-3/4">
                            <FileInput
                                v-model="form.images"
                                onlyImages
                                :initialImageUrl="form.imageURL"
                            />
                            <template
                                v-for="(errorMessage, key) in form.errors"
                            >
                                <InputError
                                    v-if="key.startsWith('images.')"
                                    :key="key"
                                    :message="errorMessage"
                                    class="mt-2"
                                ></InputError>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="sm:w-6/12 w-full p-3 mt-1">
                    <div class="sm:flex items-center justify-between">
                        <InputLabel for="brands" value="Marca"></InputLabel>
                        <div class="sm:w-3/4">
                            <MultiSelect
                                class="w-full"
                                :options="brands"
                                label="name"
                                v-model="form.brands"
                            ></MultiSelect>
                            <InputError
                                :message="form.errors.brands"
                                class="mt-2"
                            ></InputError>
                        </div>
                    </div>
                </div>
                <div class="sm:w-6/12 w-full p-3 mt-1">
                    <div class="sm:flex items-center justify-between">
                        <InputLabel
                            for="minimum_stock"
                            value="Stock mínimo"
                        ></InputLabel>
                        <div class="sm:w-3/4">
                            <FormControl
                                id="minimum_stock"
                                v-model="form.minimum_stock"
                                type="number"
                                class="w-full"
                                onlyPositiveNumbers
                            />
                            <InputError
                                :message="form.errors.minimum_stock"
                                class="mt-2"
                            ></InputError>
                        </div>
                    </div>
                </div>
            </template>
        </div>
        <div class="p-3 mt-6 flex justify-between">
            <SecondaryButton :disabled="form.processing" @click="closeModal">
                Cancelar
            </SecondaryButton>
            <PrimaryButton :disabled="form.processing" @click="save">
                <i class="fa-solid fa-save"></i> Guardar
            </PrimaryButton>
        </div>
    </Modal>
</template>

<style scoped></style>
