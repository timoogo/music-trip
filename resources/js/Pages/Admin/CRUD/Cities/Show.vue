<template>
<h1>Hello {{test}}</h1>
</template>

<script>
export default {
name: "Show",
    data(){
        return {
             city:null,
            test:"yo",

   }
    },
    mounted() {
        axios
            .get('http://127.0.0.1:8000/api/cities/{id}')
            .then(response => {
                this.city = response.data
                console.log(this.city)
            })
    }
}
</script>

<style scoped>

</style>
