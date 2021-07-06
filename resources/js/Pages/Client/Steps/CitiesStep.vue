<template>
    <ul v-if="notActive">
        <li class="cursor-pointer"  @click="increment(), registerCity(city.id), showCity(city.name)"  v-for="city in sortArrays(citiesNames)">{{ city.name }}</li>

    </ul>
</template>

<script>
export default {
    name: "CitiesStep",
    data() {
        return {
            citiesNames: null,
            whatIsSelected:null,
            notActive:true,

        }
    },
    methods:{
        sortArrays(arrays) {
            return _.orderBy(arrays, 'name', 'asc');
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
            .get('http://127.0.0.1:8000/api/cities')
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
