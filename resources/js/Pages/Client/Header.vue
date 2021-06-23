<template>
    <header>
        <nav class="flex row align-middle">
            <inertia-link class="transition duration-1000 ease-in-out hover:underline hover:text-red-600 text-green-400">
                <img :src="image_src" v-bind:alt="alt" :title="alt"/>
            </inertia-link>
            <ul class="flex items-center justify-evenly w-11/12">
                <li><inertia-link class="transition duration-1000 ease-in-out hover:underline hover:text-red-600 text-green-400">Lien 1</inertia-link></li>
                <li><inertia-link class="transition duration-1000 ease-in-out hover:underline hover:text-red-600 text-green-400">Lien 2</inertia-link></li>
                <li><inertia-link class="transition duration-1000 ease-in-out hover:underline hover:text-red-600 text-green-400">Lien 3</inertia-link></li>
               <div class="music-trip-button-container">
                   <li class="music-trip-button uppercase"><inertia-link href="/login">se connecter</inertia-link></li>
               </div>

            </ul>
        </nav>
    </header>
</template>

<script>
export default {
    name: "Header",
    data (){
        return {
            image_src:'/img/logo.png',
            alt:'Le magazine'
        }
    }
}
</script>

<style lang="scss" scoped>
div.music-trip-button-container
{
    border: 1px solid black;
    transition: 1s;
    &:hover{
        background-color:black;
    }
    & .music-trip-button{
        color: #fff;
        background-color: #000;
        clip-path: polygon(0 0, 100% 0%, 75% 100%, 0% 100%);
        padding: .5rem 2.8rem .5rem 1rem !important;
        &:hover{
            color: #000;
            background-color: #fff;
            transition: 1s;
        }
    }
}
nav ul li a :not(.music-trip-button-container){
    border: 1px solid transparent;
    padding: 1rem 2.8rem .5rem 1rem;
    box-sizing: border-box;
    &:hover{
        border: 1px solid red;
        padding: 1rem 2.8rem .5rem 1rem;
        color: red;
    }
}

</style>
