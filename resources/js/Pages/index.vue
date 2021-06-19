<template>
    <Header/>
        <main>
    <Map/>
        </main>
    <MusicTripAside/>
    <footer>
        intégré par Timogo, droit par Musictrip
    </footer>
</template>

<script>

import Header from "@/Pages/Client/Header";
import Map from "@/Pages/Client/Map";
import MusicTripAside from "@/Pages/Client/MusicTripAside";
export default {

    name: "index",
    components:{
        MusicTripAside,
        Header,
        Map,
    }
}
</script>

<style scoped>
    template{
        border: 1px solid red;
    }
</style>
