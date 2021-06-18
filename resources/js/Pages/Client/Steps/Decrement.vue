<template>
<button class="text-white text-center" @click="decrease">REVENIR EN ARRIRERE </button>
</template>

<script>
import Button from "@/Jetstream/Button";
export default {
name: "Decrement",
    components: {Button},
    methods:{
    decrease(){
        this.$emit("decrementCurrentStep")
    }
    }
}

</script>

<style scoped lang="scss">
 button{
     padding: .2rem .5rem ;
    text-align: center;
     width: 35%;
    &:hover{
        color: #000;
        text-align: center;
        background-color: #fff;
        clip-path: polygon(0 0, 100% 0%, 75% 100%, 0% 100%);

    }
}
</style>
