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
    components: {},
    methods:{
        clicked(){
            this.notActive = !this.notActive
            console.log(this.sections)
        },
        increment(){
            this.$emit("incrementCurrentStep")
        },
        decrease(){
            this.$emit("decrementCurrentStep")
        }
    },
    data(){
        return {
            currentStep: 1,
            notActive:true,
            component:"Single",
            sections: {
                "Heart":{
                    name:"Coup de coeur",
                    content:"test cdc"
                },
                "City_info":{
                    name:"Informations",
                    content:"test infos "
                },
                'Locations':{
                    name: 'Lieux préférés des chroniqueurs',
                    content:"test lieux"
                },
                'Groups':{
                    name:'Groupes',
                    content:"test groupes"
                },
                'Custom':{
                    name:'Champ personalisé',
                    content:"test custom"
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

