<template>
   <aside>
       <CitiesStep v-bind:is-selected="true"></CitiesStep>
   </aside>
</template>

<script>
import CitiesStep from "@/Pages/Client/Steps/CitiesStep";
export default {
name: "MusicTripAside",
    components: {CitiesStep},
    data (){
    return{
        currentComponent: null,
        componentsArray: ['cities', 'sections', 'single'],
    }
    }
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
