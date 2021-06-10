<template>
    <ul>
        <li @click="onClick" v-for="city in cities">{{ city }}</li>
    </ul>
</template>

<script>
export default {
name: "CitiesStep",

    data(){
    return{
        cities:{
            0: "Paris",
            1: "La Rochelle",
            2: "Nantes",
            3:"Lille",
            4:"Nevers",
            5:"Bourges",
            6:"Limoges",
            7:"St-Germain En Laye",
            8: "Montreuil",
            9: "Rennes",
            10:"Avignon",
            11:"Gronoble",
            12: "Nantes"
        }
    }
    },
    methods:{
    onClick(cityName){
        console.log(cityName);
    }
    }
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
