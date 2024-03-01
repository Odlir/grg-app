<script setup>
import { ref, onMounted } from "vue";
import "leaflet/dist/leaflet.css";
import { LMap, LTileLayer, LMarker } from "@vue-leaflet/vue-leaflet";

const props = defineProps({
    zoom: Number,
    centerPosition: Array,
    marker: Object,
});

const map = ref(null);
const markerRef = ref(props.marker);
const centerPositionRef = ref(
    props.marker
        ? [props.marker.lat, props.marker.lng]
        : props.centerPosition
);
const emit = defineEmits(["onClickMarker"]);

const addMarker = (event) => {
    markerRef.value = event.latlng;
    centerPositionRef.value = [event.latlng.lat, event.latlng.lng];
    emit("onClickMarker", markerRef.value);
};

const removeMarker = () => {
    markerRef.value = null;
    emit("onClickMarker", markerRef.value);
};

defineExpose({
    addMarker,
});
</script>

<template>
    <div class="map-container">
        <l-map
            ref="map"
            :zoom="zoom"
            :center="centerPositionRef"
            @click="addMarker($event)"
        >
            <l-tile-layer
                url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
                layer-type="base"
                name="OpenStreetMap"
            ></l-tile-layer>
            <l-marker
                v-if="markerRef"
                :lat-lng="markerRef"
                @click="removeMarker()"
            ></l-marker>
        </l-map>
    </div>
</template>

<style scoped>
.map-container {
    height: 400px;
    width: 100%;
}
</style>
