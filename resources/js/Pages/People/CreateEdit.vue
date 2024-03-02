<script setup>
import Modal from "@/Components/Modal.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SelectInput from "@/Components/SelectInput.vue";
import { useForm } from "@inertiajs/vue3";
import { ref, onMounted, watch } from "vue";
import Swal from "sweetalert2";
import Map from "@/Components/Map.vue";

const modal = ref(false);
const doc_types = ref(null);
const person_types = ref(null);
const departments = ref([]);
const provinces = ref([]);
const districts = ref([]);
const id = ref("");
const markerLocation = ref("");
const isOpenAdvancedOptions = ref(false);
const genders = ref([
    { id: "masculino", descripcion: "Masculino" },
    { id: "femenino", descripcion: "Femenino" },
]);
const ratings = ref([
    { id: "1", descripcion: "Muy malo" },
    { id: "2", descripcion: "Malo" },
    { id: "3", descripcion: "Bueno" },
    { id: "4", descripcion: "Muy bueno" },
    { id: "5", descripcion: "Excelente" },
]);

const form = useForm({
    id: null,
    doc_types: 2,
    nro_documento: "",
    nombre_legal: "",
    direccion: "",
    tipo_persona: 1,
    alias: "",
    genero: "",
    rating: "",
    distrito: {
        nombre: "",
        provincia: {
            nombre: "",
            departamento: {
                nombre: "",
            },
        },
    },
    telefono: "",
    correo: "",
    ubicacion: "",
    ubigeo: "",
});

onMounted(() => {
    getCatalogue();
});

const getCatalogue = () => {
    axios.get(route("getDocTypes")).then((response) => {
        doc_types.value = response.data;
    });

    axios.get(route("getPersonTypes")).then((response) => {
        person_types.value = response.data;
    });

    axios.get(route("getDepartments")).then((response) => {
        departments.value = response.data;
    });
};

const getProvinces = () => {
    provinces.value = [];
    districts.value = [];
    form.distrito.provincia_id = null;
    form.ubigeo = null;

    axios
        .get(route("getProvinces", form.distrito.provincia.departamento_id))
        .then((response) => {
            provinces.value = response.data;
        });
};

const getDistricts = () => {
    districts.value = [];
    form.ubigeo = null;

    axios
        .get(route("getDistricts", form.distrito.provincia_id))
        .then((response) => {
            districts.value = response.data;
        });
};

const closeModal = () => {
    modal.value = false;
    form.reset();
};

const open = (idPerson = null) => {
    id.value = idPerson;
    form.clearErrors();
    provinces.value = [];
    districts.value = [];
    markerLocation.value = null;
    if (id.value) {
        getPerson();
    } else {
        modal.value = true;
        isOpenAdvancedOptions.value = false;
    }
};

const getPerson = () => {
    axios.get(route("people.show", id.value)).then((response) => {
        Object.assign(form, response.data);
        modal.value = true;
        getUbigeo();
        isOpenAdvancedOptions.value = true;
        if(form.ubicacion) {
            const latlng = form.ubicacion.split(",");
            markerLocation.value = { lat: latlng[0], lng: latlng[1] };
        }
    });
};

const getUbigeo = () => {
    if (form.distrito) {
        axios
            .get(route("getProvinces", form.distrito.provincia.departamento_id))
            .then((response) => {
                provinces.value = response.data;
            });

        axios
            .get(route("getDistricts", form.distrito.provincia_id))
            .then((response) => {
                districts.value = response.data;
            });
    } else {
        form.distrito = {
            nombre: null,
            provincia: {
                nombre: null,
                departamento: {
                    nombre: null,
                },
            },
        };
    }
};

const save = () => {
    form.clearErrors();
    if (id.value) {
        form.put(route("people.update", id.value), {
            onSuccess: () => {
                ok("Datos actualizados correctamente.");
            },
        });
    } else {
        form.post(route("people.store"), {
            onSuccess: () => {
                ok("Datos creados correctamente.");
            },
        });
    }
};

const onClickMarker = (latlng) => {
    if (latlng) {
        form.ubicacion = latlng.lat + "," + latlng.lng;
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
                id ? "Editar cliente / proveedor" : "Nuevo cliente / proveedor"
            }}
        </h2>
        <hr />
        <div class="flex flex-wrap items-center mt-6">
            <div class="sm:w-6/12 w-full p-3 mt-1">
                <div class="sm:flex items-center justify-between">
                    <InputLabel
                        for="doc_types"
                        value="Tipo de documento"
                    ></InputLabel>
                    <div class="sm:w-3/4">
                        <SelectInput
                            id="doc_types"
                            :options="doc_types"
                            name="descripcion"
                            v-model="form.doc_types"
                            type="text"
                            class="w-full"
                        ></SelectInput>
                        <InputError
                            :message="form.errors.doc_types"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
            <div class="sm:w-6/12 w-full p-3 mt-1">
                <div class="sm:flex items-center justify-between">
                    <InputLabel
                        for="nro_documento"
                        value="N° de Documento *"
                    ></InputLabel>
                    <div class="sm:w-3/4">
                        <TextInput
                            id="nro_documento"
                            v-model="form.nro_documento"
                            type="text"
                            class="w-full"
                        ></TextInput>

                        <InputError
                            :message="form.errors.nro_documento"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
            <div class="w-full p-3 mt-1">
                <div class="sm:flex items-center justify-between">
                    <InputLabel
                        for="nombre_legal"
                        value="Nombre legal *"
                    ></InputLabel>
                    <div class="sm:w-3/4">
                        <TextInput
                            id="nombre_legal"
                            v-model="form.nombre_legal"
                            type="text"
                            class="w-full"
                        ></TextInput>
                        <InputError
                            :message="form.errors.nombre_legal"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
            <div class="w-full p-3 mt-1">
                <div class="sm:flex items-center justify-between">
                    <InputLabel
                        for="direccion"
                        value="Dirección *"
                    ></InputLabel>
                    <div class="sm:w-3/4">
                        <TextInput
                            id="direccion"
                            v-model="form.direccion"
                            type="text"
                            class="w-full"
                        ></TextInput>
                        <InputError
                            :message="form.errors.direccion"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
            <div class="w-full p-3 mt-1">
                <div class="sm:flex w-full items-center justify-between">
                    <InputLabel for="tipo_persona" value="Tipo"></InputLabel>
                    <div class="sm:w-3/4">
                        <SelectInput
                            id="tipo_persona"
                            :options="person_types"
                            name="descripcion"
                            v-model="form.tipo_persona"
                            type="text"
                            class="w-full"
                        ></SelectInput>

                        <InputError
                            :message="form.errors.tipo_persona"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap items-center mt-6">
            <h5
                class="ml-3 text-white cursor-pointer hover:underline w-full"
                @click="isOpenAdvancedOptions = !isOpenAdvancedOptions"
            >
                {{ isOpenAdvancedOptions ? "Ocultar" : "Ver" }} opciones
                avanzadas
            </h5>
            <template v-if="isOpenAdvancedOptions">
                <div class="w-full p-3 mt-1">
                    <div class="sm:flex items-center justify-between">
                        <InputLabel for="alias" value="Alias"></InputLabel>
                        <div class="sm:w-3/4">
                            <TextInput
                                id="alias"
                                v-model="form.alias"
                                type="text"
                                class="w-full"
                            ></TextInput>
                            <InputError
                                :message="form.errors.alias"
                                class="mt-2"
                            ></InputError>
                        </div>
                    </div>
                </div>
                <div class="w-full p-3 mt-1">
                    <div class="sm:flex w-full items-center justify-between">
                        <InputLabel for="genero" value="Género"></InputLabel>
                        <div class="sm:w-3/4">
                            <SelectInput
                                id="genero"
                                :options="genders"
                                name="descripcion"
                                v-model="form.genero"
                                type="text"
                                class="w-full"
                            ></SelectInput>

                            <InputError
                                :message="form.errors.genero"
                                class="mt-2"
                            ></InputError>
                        </div>
                    </div>
                </div>
                <div class="w-full p-3 mt-1">
                    <div class="sm:flex items-center justify-between">
                        <InputLabel
                            for="telefono"
                            value="Teléfono"
                        ></InputLabel>
                        <div class="sm:w-3/4">
                            <TextInput
                                id="telefono"
                                v-model="form.telefono"
                                type="text"
                                class="w-full"
                            ></TextInput>
                            <InputError
                                :message="form.errors.telefono"
                                class="mt-2"
                            ></InputError>
                        </div>
                    </div>
                </div>
                <div class="w-full p-3 mt-1">
                    <div class="sm:flex items-center justify-between">
                        <InputLabel
                            for="correo"
                            value="Correo electrónico"
                        ></InputLabel>
                        <div class="sm:w-3/4">
                            <TextInput
                                id="correo"
                                v-model="form.correo"
                                type="text"
                                class="w-full"
                            ></TextInput>
                            <InputError
                                :message="form.errors.correo"
                                class="mt-2"
                            ></InputError>
                        </div>
                    </div>
                </div>
                <div class="w-full p-3 mt-1">
                    <div class="sm:flex items-center justify-between">
                        <InputLabel
                            for="rating"
                            value="Calificación"
                        ></InputLabel>
                        <div class="sm:w-3/4">
                            <SelectInput
                                id="rating"
                                :options="ratings"
                                name="descripcion"
                                v-model="form.rating"
                                type="text"
                                class="w-full"
                            ></SelectInput>
                            <InputError
                                :message="form.errors.rating"
                                class="mt-2"
                            ></InputError>
                        </div>
                    </div>
                </div>
                <div class="w-full p-3 mt-1">
                    <div class="sm:flex items-center justify-between">
                        <InputLabel
                            for="department"
                            value="Departamento"
                        ></InputLabel>
                        <div class="sm:w-3/4">
                            <SelectInput
                                id="department"
                                :options="departments"
                                name="nombre"
                                v-model="
                                    form.distrito.provincia.departamento_id
                                "
                                @update:modelValue="getProvinces"
                                type="text"
                                class="w-full"
                            ></SelectInput>
                        </div>
                    </div>
                </div>
                <div class="w-full p-3 mt-1">
                    <div class="sm:flex items-center justify-between">
                        <InputLabel
                            for="province"
                            value="Provincia"
                        ></InputLabel>
                        <div class="sm:w-3/4">
                            <SelectInput
                                id="province"
                                :options="provinces"
                                name="nombre"
                                v-model="form.distrito.provincia_id"
                                @update:modelValue="getDistricts"
                                type="text"
                                class="w-full"
                            ></SelectInput>
                        </div>
                    </div>
                </div>
                <div class="w-full p-3 mt-1">
                    <div class="sm:flex items-center justify-between">
                        <InputLabel
                            for="district"
                            value="Distrito"
                        ></InputLabel>
                        <div class="sm:w-3/4">
                            <SelectInput
                                id="district"
                                :options="districts"
                                name="nombre"
                                v-model="form.ubigeo"
                                type="text"
                                class="w-full"
                            ></SelectInput>
                        </div>
                    </div>
                </div>
                <div class="w-full p-3 mt-1">
                    <InputLabel value="Seleccione la ubicación"></InputLabel>
                    <Map
                        class="mt-3"
                        :centerPosition="[-12.0453, -77.0311]"
                        :zoom="12"
                        :marker="markerLocation"
                        @onClickMarker="onClickMarker"
                    ></Map>
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
