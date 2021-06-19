<template>
   <aside>
       <Decrement v-if="currentStep > 0" @click="decrementCurrentStep"/>
       <CitiesStep @increment="incrementCurrentStep" @registerCity="registerCurrentCity" v-if="currentStep == 0"/>
       <Sections   @increment="incrementCurrentStep" @display="getContent" v-if="currentStep == 1"/>
       <Single v-if="currentStep ==2" :title="content" :content="contentData"/>
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
    props:['active', 'title', 'content'],
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
        incrementCurrentStep (){
            this.currentStep+=1;
        },
        decrementCurrentStep(){
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
