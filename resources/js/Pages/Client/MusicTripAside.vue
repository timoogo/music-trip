<template>
   <aside>
       <CitiesStep></CitiesStep>
   </aside>
</template>

<script>
import CitiesStep from "@/Pages/Client/Steps/CitiesStep";
export default {
name: "MusicTripAside",
    components: {CitiesStep},
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
