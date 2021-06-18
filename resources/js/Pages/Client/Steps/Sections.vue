<template>
    <ul v-if="!notActive" class="hidden invisible">
        <li class="cursor-pointer"  @click="clicked, increment"  v-for="section in sections">{{ section.name }}</li>
    </ul>
    <ul v-else class="flex flex-col">
        <li class="cursor-pointer"  @click="clicked, increment"  v-for="section in sections">{{ section.name }}</li>
    </ul>
</template>

<script>
export default {
    name: "Sections",
    methods:{
        clicked(){
            this.notActive = !this.notActive
        },
        increment(){
            this.$emit("incrementCurrentStep")
        },
    },
    data(){
        return {
            notActive:true,
            component:"Single",
            sections: {
                "Heart":{
                    name:"Coup de coeur",
                },
                "City_info":{
                    name:"Informations",
                },
                'Locations':{
                    name: 'Lieux préférés des chroniqueurs'
                },
                'Groups':{
                    name:'Groupes',
                },
                'Custom':{
                    name:'Champ personalisé'
                }

            }
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

