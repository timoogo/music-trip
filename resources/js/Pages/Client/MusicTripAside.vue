<template>
   <aside>
       <Decrement v-if="currentStep > 0" @click="decrementCurrentStep()"/>
       <CitiesStep @click="incrementCurrentStep()" v-if="currentStep == 0"/>
       <Sections   @click="incrementCurrentStep()" v-if="currentStep == 1"/>
       <Single v-if="currentStep ==2" :title="content" :content="c.toString()"/>
   </aside>
</template>

<script>
import CitiesStep from "@/Pages/Client/Steps/CitiesStep";
import Sections from "@/Pages/Client/Steps/Sections";
import Single from "@/Pages/Client/Steps/Single";
import Decrement from "@/Pages/Client/Steps/Decrement";
export default {
name: "MusicTripAside",
    components: {Decrement, Single, Sections, CitiesStep},
    data (){
    return{
        currentStep: 0,
        componentsArray: ['cities', 'sections', 'single'],
        content:Sections.data().sections.Custom.name,
        c: "ayo"
    }
    },
    props:['active', 'title', 'content'],
    methods:{
        incrementCurrentStep (){
            window.console.log(this.currentStep)
            this.currentStep+=1;
        },
        decrementCurrentStep(){
            window.console.log(this.currentStep)
            this.currentStep-=1;
        }
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
