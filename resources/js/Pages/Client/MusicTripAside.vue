<template>
   <aside class="absolute right-0 top-36 p-3 w-1/2 h-5/6 mt-1 bg-black">
    <div class="flex flex-row justify-between">
        <Decrement v-if="currentStep > 0" @click="decrementCurrentStep"/>
        <span class="text-white" v-if="currentStep > 0">{{  }}</span>
    </div>
       <CitiesStep v-if="currentStep == 0" @increment="incrementCurrentStep" @registerCity="registerCurrentCity" />
       <Sections  v-if="currentStep == 1" @increment="incrementCurrentStep" @display="getContent" />
       <Single v-if="currentStep > 1"/>
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
    data(){
    return{
        selectedCity:null,
        selectedSection:null,
        currentStep: 0,
        contentData: null
    }
    },
    props:['title', 'content'],
    methods:{
        registerCurrentCity(city){
            this.selectedCity = city
            console.log(city)

        },

        getContent(cityId,sectionName){
                return axios
                    .get('http://127.0.0.1:8000/api/'+ sectionName + '/' + cityId)
                    .then(response => (this.contentData = response.data))


        },
        triggerSingleContent(){
            this.currentStep+=1
        },
        incrementCurrentStep (){
            console.log('incremented')
            this.currentStep++;
        },
        decrementCurrentStep(){
            this.currentStep-=1;
            this.$children.notActive = true
        }
    },


}
</script>

<style scoped lang="scss">
aside {
/*
    position: absolute;
    right: 0;
    top: 15.5vh;
    padding: 3rem;
    width: 50%;
    height: 88vh;
    max-height: 100%;
    margin-top: 2vh;
    background-color: #000;*/
}

</style>
