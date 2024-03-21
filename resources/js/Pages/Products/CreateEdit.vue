<script setup>
import Modal from "@/Components/Modal.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SelectInput from "@/Components/SelectInput.vue";
import FileInput from "@/components/FileInput.vue";
import FormControl from "@/components/FormControl.vue";
import { useForm } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";
import Swal from "sweetalert2";

const modal = ref(false);
const unitsOfMeasure = ref(null);
const warehouses = ref(null);
const categories = ref(null);
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
    warehouse_id: "",
    type: "",
    image: "",
    imageURL: "",
    images: "",
    minimum_stock: "",
    initial_stock: 10,
    category_id: "",
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
    });
};

const save = () => {
    form.clearErrors();
    if(id.value) form.method = 'PUT';
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
            <div class="w-full p-3 mt-1">
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
            <div class="w-full p-3 mt-1">
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
            <div class="w-full p-3 mt-1">
                <div class="sm:flex items-center justify-between">
                    <InputLabel for="cost" value="Costo *"></InputLabel>
                    <div class="sm:w-3/4">
                        <FormControl
                            id="cost"
                            v-model="form.cost"
                            inputmode="numeric"
                            type="number"
                            class="w-full"
                        />
                        <InputError
                            :message="form.errors.cost"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
            <div class="w-full p-3 mt-1">
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
            <div class="w-full p-3 mt-1">
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
            <div class="w-full p-3 mt-1">
                <div class="sm:flex w-full items-center justify-between">
                    <InputLabel
                        for="category_id"
                        value="Categoría *"
                    ></InputLabel>
                    <div class="sm:w-3/4">
                        <SelectInput
                            id="category_id"
                            :options="categories"
                            name="description"
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
                    <InputLabel for="warehouse_id" value="Almacén"></InputLabel>
                    <div class="sm:w-3/4">
                        <SelectInput
                            id="warehouse_id"
                            :options="warehouses"
                            name="description"
                            v-model="form.warehouse_id"
                            type="text"
                            class="w-full"
                        ></SelectInput>

                        <InputError
                            :message="form.errors.warehouse_id"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
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
                <div class="w-full p-3 mt-1">
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
                            />
                            <InputError
                                :message="form.errors.minimum_stock"
                                class="mt-2"
                            ></InputError>
                        </div>
                    </div>
                </div>
                <div class="w-full p-3 mt-1">
                    <div class="sm:flex items-center justify-between">
                        <InputLabel
                            for="initial_stock"
                            value="Stock inicial *"
                        ></InputLabel>
                        <div class="sm:w-3/4">
                            <FormControl
                                id="initial_stock"
                                v-model="form.initial_stock"
                                type="number"
                                class="w-full"
                            />
                            <InputError
                                :message="form.errors.initial_stock"
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
