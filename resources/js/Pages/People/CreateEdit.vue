<script setup>
import Modal from "@/Components/Modal.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SelectInput from "@/Components/SelectInput.vue";
import MultiSelect from "@/Components/MultiSelect.vue";
import { useForm } from "@inertiajs/vue3";
import { ref, onMounted, watch } from "vue";
import Swal from "sweetalert2";
import Map from "@/Components/Map.vue";

const modal = ref(false);
const doc_types = ref(null);
const person_types = ref(null);
const clients_category = ref(null);
const departments = ref([]);
const provinces = ref([]);
const districts = ref([]);
const id = ref("");
const markerLocation = ref("");
const isOpenAdvancedOptions = ref(false);
const genders = ref([
    { id: "male", description: "Masculino" },
    { id: "female", description: "Femenino" },
]);
const ratings = ref([
    { id: "1", description: "Muy malo" },
    { id: "2", description: "Malo" },
    { id: "3", description: "Bueno" },
    { id: "4", description: "Muy bueno" },
    { id: "5", description: "Excelente" },
]);

const form = useForm({
    id: null,
    doc_types: 2,
    document_number: "",
    legal_name: "",
    direction: "",
    alias: "",
    gender: "",
    rating: "",
    client_category_id: "",
    district: {
        name: "",
        province: {
            name: "",
            department: {
                name: "",
            },
        },
    },
    phone: "",
    email: "",
    location: "",
    ubigeo: "",
    persontype: null
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

    axios.get(route("getClientsCategory")).then((response) => {
        clients_category.value = response.data;
    });

    axios.get(route("getDepartments")).then((response) => {
        departments.value = response.data;
    });
};

const getProvinces = () => {
    provinces.value = [];
    districts.value = [];
    form.district.province_id = null;
    form.ubigeo = null;

    axios
        .get(route("getProvinces", form.district.province.department_id))
        .then((response) => {
            provinces.value = response.data;
        });
};

const getDistricts = () => {
    districts.value = [];
    form.ubigeo = null;

    axios
        .get(route("getDistricts", form.district.province_id))
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
        if(form.location) {
            const latlng = form.location.split(",");
            markerLocation.value = { lat: latlng[0], lng: latlng[1] };
        }
        if(form.persontype) {
            form.persontype = form.persontype.map(item => item.id);
        }
    });
};

const getUbigeo = () => {
    if (form.district) {
        axios
            .get(route("getProvinces", form.district.province.department_id))
            .then((response) => {
                provinces.value = response.data;
            });

        axios
            .get(route("getDistricts", form.district.province_id))
            .then((response) => {
                districts.value = response.data;
            });
    } else {
        form.district = {
            name: null,
            province: {
                name: null,
                department: {
                    name: null,
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
        form.location = latlng.lat + "," + latlng.lng;
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
                            name="description"
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
                        for="document_number"
                        value="N° de Documento *"
                    ></InputLabel>
                    <div class="sm:w-3/4">
                        <TextInput
                            id="document_number"
                            v-model="form.document_number"
                            type="text"
                            class="w-full"
                        ></TextInput>

                        <InputError
                            :message="form.errors.document_number"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
            <div class="w-full p-3 mt-1">
                <div class="sm:flex items-center justify-between">
                    <InputLabel
                        for="legal_name"
                        value="Nombre legal *"
                    ></InputLabel>
                    <div class="sm:w-3/4">
                        <TextInput
                            id="legal_name"
                            v-model="form.legal_name"
                            type="text"
                            class="w-full"
                        ></TextInput>
                        <InputError
                            :message="form.errors.legal_name"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
            <div class="w-full p-3 mt-1">
                <div class="sm:flex items-center justify-between">
                    <InputLabel
                        for="direction"
                        value="Dirección *"
                    ></InputLabel>
                    <div class="sm:w-3/4">
                        <TextInput
                            id="direction"
                            v-model="form.direction"
                            type="text"
                            class="w-full"
                        ></TextInput>
                        <InputError
                            :message="form.errors.direction"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
            <div class="w-full p-3 mt-1">
                <div class="sm:flex w-full items-center justify-between">
                    <InputLabel for="persontype" value="Tipo *"></InputLabel>
                    <div class="sm:w-3/4">
                        <MultiSelect class="w-full" :options="person_types" v-model="form.persontype"></MultiSelect>
                        <InputError
                            :message="form.errors.persontype"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
            <div class="w-full p-3 mt-1" v-if="form.persontype && form.persontype.includes(1)">
                <div class="sm:flex w-full items-center justify-between">
                    <InputLabel for="client_category_id" value="Tipo de precio *"></InputLabel>
                    <div class="sm:w-3/4">
                        <MultiSelect class="w-full" label="name" :options="clients_category" v-model="form.client_category_id" :multiple="false"></MultiSelect>
                        <InputError
                            :message="form.errors.client_category_id"
                            class="mt-2"
                        ></InputError>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap items-center mt-6">
            <h5
                class="ml-3  dark:text-white cursor-pointer hover:underline w-full"
                @click="isOpenAdvancedOptions = !isOpenAdvancedOptions"
            >
                {{ isOpenAdvancedOptions ? "Ocultar" : "Ver" }} opciones
                avanzadas
            </h5>
            <template v-if="isOpenAdvancedOptions">
                <div class="sm:w-6/12 w-full p-3 mt-1">
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
                <div class="sm:w-6/12 w-full p-3 mt-1">
                    <div class="sm:flex w-full items-center justify-between">
                        <InputLabel for="gender" value="Género"></InputLabel>
                        <div class="sm:w-3/4">
                            <SelectInput
                                id="gender"
                                :options="genders"
                                name="description"
                                v-model="form.gender"
                                type="text"
                                class="w-full"
                            ></SelectInput>

                            <InputError
                                :message="form.errors.gender"
                                class="mt-2"
                            ></InputError>
                        </div>
                    </div>
                </div>
                <div class="sm:w-6/12 w-full p-3 mt-1">
                    <div class="sm:flex items-center justify-between">
                        <InputLabel
                            for="phone"
                            value="Teléfono"
                        ></InputLabel>
                        <div class="sm:w-3/4">
                            <TextInput
                                id="phone"
                                v-model="form.phone"
                                type="text"
                                class="w-full"
                            ></TextInput>
                            <InputError
                                :message="form.errors.phone"
                                class="mt-2"
                            ></InputError>
                        </div>
                    </div>
                </div>
                <div class="sm:w-6/12 w-full p-3 mt-1">
                    <div class="sm:flex items-center justify-between">
                        <InputLabel
                            for="email"
                            value="Correo electrónico"
                        ></InputLabel>
                        <div class="sm:w-3/4">
                            <TextInput
                                id="email"
                                v-model="form.email"
                                type="text"
                                class="w-full"
                            ></TextInput>
                            <InputError
                                :message="form.errors.email"
                                class="mt-2"
                            ></InputError>
                        </div>
                    </div>
                </div>
                <div class="sm:w-6/12 w-full p-3 mt-1">
                    <div class="sm:flex items-center justify-between">
                        <InputLabel
                            for="rating"
                            value="Calificación"
                        ></InputLabel>
                        <div class="sm:w-3/4">
                            <SelectInput
                                id="rating"
                                :options="ratings"
                                name="description"
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
                <div class="sm:w-6/12 w-full p-3 mt-1">
                    <div class="sm:flex items-center justify-between">
                        <InputLabel
                            for="department"
                            value="Departamento"
                        ></InputLabel>
                        <div class="sm:w-3/4">
                            <SelectInput
                                id="department"
                                :options="departments"
                                name="name"
                                v-model="
                                    form.district.province.department_id
                                "
                                @update:modelValue="getProvinces"
                                type="text"
                                class="w-full"
                            ></SelectInput>
                        </div>
                    </div>
                </div>
                <div class="sm:w-6/12 w-full p-3 mt-1">
                    <div class="sm:flex items-center justify-between">
                        <InputLabel
                            for="province"
                            value="Provincia"
                        ></InputLabel>
                        <div class="sm:w-3/4">
                            <SelectInput
                                id="province"
                                :options="provinces"
                                name="name"
                                v-model="form.district.province_id"
                                @update:modelValue="getDistricts"
                                type="text"
                                class="w-full"
                            ></SelectInput>
                        </div>
                    </div>
                </div>
                <div class="sm:w-6/12 w-full p-3 mt-1">
                    <div class="sm:flex items-center justify-between">
                        <InputLabel
                            for="district"
                            value="Distrito"
                        ></InputLabel>
                        <div class="sm:w-3/4">
                            <SelectInput
                                id="district"
                                :options="districts"
                                name="name"
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
