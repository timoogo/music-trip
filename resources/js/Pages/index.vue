<template>
<div class="overflow-y-hidden">
    <Header/>
    <main>
        <Map/>
    </main>
    <MusicTripAside/>
    <Footer/>
</div>
</template>

<script>

import Header from "@/Pages/Client/Header";
import Map from "@/Pages/Client/Map";
import MusicTripAside from "@/Pages/Client/MusicTripAside";
import Footer from "@/Pages/Client/Footer";
export default {

    name: "index",
    components:{
        Footer,
        MusicTripAside,
        Header,
        Map,
    }
}
</script>

<style scoped>
  html{

  }
</style>
