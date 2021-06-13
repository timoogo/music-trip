<template>
    <div class="map">
    <GoogleMap
        api-key="AIzaSyAEU_oku2XWD_aTo8Ebd4QKT9wWYUz4_oU"
        style=" margin-top: 4vh; width: 75%; height: 85vh;"
        :center="center"
        :zoom="6"
        :backgroundColor="red"
    >

        <Marker :options="{ position: center }" />
    </GoogleMap>
    </div>
</template>

<script>
import { defineComponent } from 'vue'
import { GoogleMap, Marker } from 'vue3-google-map'

export default defineComponent({
    components: { GoogleMap, Marker },
    data(){
        return{
            api_key:"AIzaSyAEU_oku2XWD_aTo8Ebd4QKT9wWYUz4_oU",
            cities: {

                0: {
                    name: "Paris",
                    lng: "2.20",
                    lat: "48.866667",
                },
                1: {
                    name: "La Rochelle",
                    lng: -1.09,
                    lat: 46.1591126,
                },
                2: {
                    name: "Nantes",
                    lng: -1.33,
                    lat: 47.2186371,
                },
                3: {
                    name: "Lille",
                    lng: 3.03,
                    lat: 50.6365654,
                },
                4: {
                    name: "Nevers",
                    lng: 3.09,
                    lat: 46.9876601,
                },
                5: {
                    name: "Bourges",
                    lng: "2.25",
                    lat: "47.0805693",
                },
                6: {
                    name: "Limoges",
                    lng: "1.15",
                    lat: "45.8354243",
                },
                7: {
                    name: "St-Germain En Laye",
                    lng: 2.0833,
                    lat: 48.9356047,
                },
                8: {
                    name: "Montreuil",
                    lng: 2.448451,
                    lat: 50.4638918,
                },
                9: {
                    name: "Rennes",
                    lng: -1.6777926,
                    lat: 48.1113387,
                },
                10: {
                    name: "Avignon",
                    lng: 4.80559,
                    lat: 43.9492493,
                },
                11: {
                    name: "Grenoble",
                    lng: "5.724524",
                    lat: "45.1875602",
                },
                12: {
                    name: "Nantes",
                    lng: 5.724524,
                    lat: 47.2186371,
                },

            },
        }
    },
    setup() {
        const center = { lat: 46, lng: 2 }
       // const cities = [data.cities];

        return { center }
    },
})
</script>
<style lang="scss" scoped>
    .map {
        width:100%;
        height:  85vh;
        background: #fff;
    }
</style>
