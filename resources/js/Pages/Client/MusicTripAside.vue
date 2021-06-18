<template>
   <aside>
       <CitiesStep @click="incrementCurrentStep()" v-if="currentStep == 0"/>
       <Sections   @click="incrementCurrentStep()" v-if="currentStep == 1"/>
       <Single v-if="currentStep ==2" title="yo" content="{{c}}"/>
   </aside>
</template>

<script>
import CitiesStep from "@/Pages/Client/Steps/CitiesStep";
import Sections from "@/Pages/Client/Steps/Sections";
import Single from "@/Pages/Client/Steps/Single";
export default {
name: "MusicTripAside",
    components: {Single, Sections, CitiesStep},
    data (){
    return{
        currentStep: 0,
        componentsArray: ['cities', 'sections', 'single'],
        content:"ratata",
        c: this.content
    }
    },
    props:['active', 'title', 'content'],
    methods:{
        incrementCurrentStep (){
            window.console.log(this.currentStep)
            this.currentStep+=1;
        },
    },


}
</script>

<style scoped lang="scss">
aside {
    position: absolute;
    right: 0;
    top: 15.5vh;
    padding: 3rem;
    width: 50%;
    height: 83vh;
    margin-top: 2vh;
    background-color: #000;
}

</style>
