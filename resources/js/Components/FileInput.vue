<script setup>
import { FwbFileInput } from "flowbite-vue";
import { ref, onMounted } from "vue";

const props = defineProps({
    multiple: Boolean,
    onlyImages: Boolean,
    initialImageUrl: String
});

const emit = defineEmits(["update:modelValue"]);

const imageUrls = ref([]);

const handleFileInputChange = (event) => {
    imageUrls.value = [];
    const fileList = event.target.files;
    for (let i = 0; i < fileList.length; i++) {
        const file = fileList[i];
        if (file.type.startsWith("image/")) {
            const reader = new FileReader();
            reader.onload = () => {
                imageUrls.value.push(reader.result);
            };
            reader.readAsDataURL(file);
        }
        emit("update:modelValue", fileList);
    }
};

onMounted(() => {
  if (props.initialImageUrl) {
    imageUrls.value = [props.initialImageUrl];
  }
})
</script>

<template>
    <img
        v-for="(url, index) in imageUrls"
        :key="index"
        width="200"
        height="200"
        :src="url"
        alt="Selected image"
    />
    <fwb-file-input @change="handleFileInputChange" :multiple="multiple">
        <p class="!mt-1 text-sm text-gray-500 dark:text-gray-300" v-if="onlyImages">
            SVG, PNG, JPG, JPEG o GIF
        </p>
    </fwb-file-input>
</template>
