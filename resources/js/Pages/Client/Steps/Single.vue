<template>
    <div  v-if="$parent.currentStep == 2" @click="theContent($parent.selectedCity)" class="overflow-auto max-h-max h-full	 pb-96">
        <div  v-for="el in $parent.contentData">
            <h1 class="text-white text-center text-5xl my-9">{{  el.title}}</h1>
            <div>
                <img v-if="el.img_src != null" :src="el.img_src" />
                <p class="text-white">{{ el.description}}</p>
            </div>

            <div v-if="el.video_src != null" >
                <hr class="my-9"/>
                <span class="block my-9 mx-auto text-center text-white">Ressource personnelle </span>
                <video class="mx-auto" allowfullscreen allow="autoplay" controls width="500">
                    <source :src="el.video_src"/>
                </video>
            </div>
            <hr class="my-9"/>
            <div class="my-9" v-if="el.yt_src != null">
                <span class="block my-9 mx-auto text-center text-white">Ressource de Youtube</span>
                <video class="mx-auto" allowfullscreen allow="autoplay" controls width="500">
                    <source :src="el.video_yt"/>
                </video>
            </div>

        </div>
    </div>
</template>
<script>
export default {
    name: "Single",
    data(){
        return {
            singleContent:null
        }
    },
    methods:{
        clicked(){
            this.notActive = !this.notActive
        },
        theContent(cityid){
            this.$emit('registerTheContent', cityid)
        }
    },
    mounted() {
        axios
            .get('http://127.0.0.1:8000/api/info')
            .then(response => (this.singleContent = response.data))
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
