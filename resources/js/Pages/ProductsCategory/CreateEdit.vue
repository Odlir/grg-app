<script setup>
import Modal from "@/Components/Modal.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { useForm } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";
import Swal from "sweetalert2";

const modal = ref(false);
const id = ref("");

const form = useForm({
    id: null,
    name: '',
    description: ''
});

onMounted(() => {
});

const closeModal = () => {
    modal.value = false;
    form.reset();
};

const open = (idCategory = null) => {
    id.value = idCategory;
    form.clearErrors();
    if (id.value) {
        getCategory();
    } else {
        modal.value = true;
    }
};

const getCategory = () => {
    axios.get(route("products_category.show", id.value)).then((response) => {
        Object.assign(form, response.data);
        modal.value = true;
    });
};

const save = () => {
    form.clearErrors();
    if (id.value) {
        form.put(route("products_category.update", id.value), {
            onSuccess: () => {
                ok("Datos actualizados correctamente.");
            },
        });
    } else {
        form.post(route("products_category.store"), {
            onSuccess: () => {
                ok("Datos creados correctamente.");
            },
        });
    }
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
            {{
                id ? "Editar categoría" : "Nueva categoría"
            }}
        </h2>
        <hr />
        <div class="flex flex-wrap items-center mt-6">
            <div class="w-full p-3 mt-1">
                <div class="sm:flex items-center justify-between">
                    <InputLabel
                        for="name"
                        value="Nombre *"
                    ></InputLabel>
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
                    <InputLabel
                        for="description"
                        value="Descripción *"
                    ></InputLabel>
                    <div class="sm:w-3/4">
                        <TextInput
                            id="description"
                            v-model="form.description"
                            type="text"
                            class="w-full"
                        ></TextInput>

                        <InputError
                            :message="form.errors.description"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
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
