<template>
    <ul v-if="!notActive" class="hidden invisible">
        <li class="cursor-pointer"  @click=" increment, display($parent.selectedCity, section.id)"  v-for="section in sections">{{ section.name }}</li>
    </ul>
    <ul v-else class="flex flex-col">
        <li class="cursor-pointer"  @click=" increment, display($parent.selectedCity, section.id)"  v-for="section in sections">{{ section.name }}</li>
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
        },
        display(cityId, sectionName){
            this.$emit('display', cityId, sectionName)
        }
    },
    data(){
        return {
            currentStep: 1,
            notActive: true,
            sections : {


                0: {
                    id: "info",
                    name: 'informations'
                },
                1: {
                    id: "locations",
                    name: "Locations"
                },
                2:
                    {
                        id:'heartstroke',
                    name: "Coup de coeur"
                },
                3: {id:"musicgroup",
                    name: "Music group"
                },
                4: {id:"customdata",
                    name: "Info Suplementaires"
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

