<template>
    <ul v-if="notActive">
        <li class="cursor-pointer"  @click="increment(), registerCity(city.id)"  v-for="city in sortArrays(citiesNames)">{{ city.name }}</li>

    </ul>
</template>

<script>
export default {
    name: "CitiesStep",

    data() {
        return {
            citiesNames: null,
            whatIsSelected:[],
            notActive:true,

            cities: {
                0: {
                    id:0,
                    name: "Paris",
                    lng: "2.20",
                    lat: "48.866667",
                },
                1: {
                    id:1,
                    name: "La Rochelle",
                    lng: -1.09,
                    lat: 46.1591126,
                },
                2: {
                    id:2,
                    name: "Nantes",
                    lng: -1.33,
                    lat: 47.2186371,
                },
                3: {
                    id:3,
                    name: "Lille",
                    lng: 3.03,
                    lat: 50.6365654,
                },
                4: {
                    id:4,
                    name: "Nevers",
                    lng: 3.09,
                    lat: 46.9876601,
                },
                5: {
                    id:5,
                    name: "Bourges",
                    lng: "2.25",
                    lat: "47.0805693",
                },
                6: {
                    id:6,
                    name: "Limoges",
                    lng: "1.15",
                    lat: "45.8354243",
                },
                7: {
                    id:7,
                    name: "St-Germain En Laye",
                    lng: 2.0833,
                    lat: 48.9356047,
                },
                8: {
                    id:8,
                    name: "Montreuil",
                    lng: 2.448451,
                    lat: 50.4638918,
                },
                9: {
                    id:9,
                    name: "Rennes",
                    lng: -1.6777926,
                    lat: 48.1113387,
                },
                10: {
                    id:10,
                    name: "Avignon",
                    lng: 4.80559,
                    lat: 43.9492493,
                },
                11: {
                    id:11,
                    name: "Grenoble",
                    lng: "5.724524",
                    lat: "45.1875602",
                },
                12: {
                    id:12,
                    name: "Nantes",
                    lng: 5.724524,
                    lat: 47.2186371,
                },

            },

        }
    },
   methods:{
       sortArrays(arrays) {
           return _.orderBy(arrays, 'name', 'asc');
       },
        showCity: function(event) {
           let value = event.currentTarget.id;
        this.clicked()

        },
       clicked() {
        this.notActive = !this.notActive
       },
       increment() {
           this.$emit("increment")
       },
       registerCity(cityid){
            this.$emit('registerCity', cityid)
       }


   },
    mounted() {
        axios
            .get('http://127.0.0.1:8000/api/info')
            .then(response => {
                (this.citiesNames = response.data)
            })
    },

}


</script>

<style scoped lang="scss">
    ul{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        height: 100%;
        padding: 3rem;
        color:#fff ;
        font-size: 20px;
        & li{

            &:hover{
                color: #000;
                text-align: center;
                background-color: #fff;
                clip-path: polygon(0 0, 100% 0%, 75% 100%, 0% 100%);
                padding: .5rem 2.8rem .5rem 1rem !important;
                width: 50%;
            }
        }

    }
</style>
