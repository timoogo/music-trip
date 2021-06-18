<template>
    <div v-if="!notActive" class="">
        <h1 class="text-white">{{title}}</h1>
        <div><p class="text-white"></p></div>
    </div>
    <div v-else class="hidden">
        <h1 class="text-white">{{title}}</h1>
        <div><p class="text-white"></p></div>
    </div>
</template>
<script>
export default {
name: "Single",
    data(){
    return {
        notActive:false,
        title:"yo"

    }
    },
    methods:{
        clicked(){
            this.notActive = !this.notActive
        },

    },
    props: {
        title:{
            type:String,
            required:true
        },
        content:{
            type:String,
            required: true,
        }
    }
}
</script>

<style scoped>

</style>
