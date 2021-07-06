<template>
        <ul class="h-5/6">
            <li class=" text-white cursor-pointer"  @click="clicked(), increment(), display($parent.selectedCity, section.id)"  v-for="section in sections">{{ section.name }}</li>
        </ul>
</template>

<script>

export default {
    name: "Sections",
    components: {},
    methods:{
        clicked(){
            console.log(this.sections)
        },
        increment(){
            console.log('incremented ' + this.currentStep )
            this.$emit("increment")
            console.log('incremented ' + this.currentStep )
        },
        decrease(){
            this.$emit("decrementCurrentStep")
        },
        display(cityId, sectionName){
            console.log( sectionName + " clicked")
            this.$emit('display', cityId, sectionName)

        }
    },
    data(){
        return {
            currentStep: 1,
            notActive: false,
            sections : {
                0: {
                    id: "info",
                    name: 'Informations'
                },
                1: {
                    id: "locations",
                    name: "Lieux"
                },
                2:
                    {
                    id:'heartstroke',
                    name: "Coups de coeur"
                },
                3: {id:"musicgroup",
                    name: "Groupes de musique"
                },
                4: {id:"customdata",
                    name: "Bonus"
                }

            },

        }
        },

}
</script>

<style scoped lang="scss">
ul{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
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

