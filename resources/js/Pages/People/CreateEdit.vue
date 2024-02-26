<script setup>
import {useForm} from '@inertiajs/vue3';
import { ref } from 'vue';
const modal = ref(false);

const form = useForm({
    doc_types:'',
    nro_documento:'',
    nombre_legal:'',
    direccion:'',
    tipo_persona:'',
    alias:'',
    genero:'',
    rating:'',
    telefono:'',
    correo:'',
    ubicacion:'',
    ubigeo:''
});

const closeModal = () => {
    modal.value = false;
    form.reset();
}

const open = (form = null) => {
    modal.value = true;
    if (form) form.value = form;
}

defineExpose({
  open
});

</script>

<template>
    <Modal :show="modal" @close="closeModal">
        <h2 class="p-3 text-lg font.medium text-hray-900">{{ form ? 'Editar' : 'Crear' }}</h2>
    </Modal>
</template>

<style scoped>

</style>
