<template>
    <section class="shadow row">
      <form @submit.prevent="handleSubmit" data-id="">
        <div class="tabs">
            <div class="border-b tab">

                <div class="border-l-2 border-transparent relative">

                    <input  @click="(isOpen, onClick)" v-model="isOpen" class="w-full absolute z-10 cursor-pointer opacity-0 h-5 top-6" type="checkbox" id="chck1">
                    <header :class="{ red : deleteClicked }" class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none tab-label" for="chck1">
                                <span class="text-grey-darkest font-thin text-xl">
                                    {{ title }}
                                </span>
                        <div class="rounded-full border border-grey w-7 h-7 flex items-center justify-center test">
                            <!-- icon by feathericons.com -->
                            <svg aria-hidden="true" class="" data-reactid="266" fill="none" height="24" stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <polyline points="6 9 12 15 18 9">
                                </polyline>
                            </svg>
                        </div>
                    </header>
                    <div class="tab-content">
                        <div class="pl-8 pr-8 pb-5 text-grey-darkest">
                            <ul class="pl-4">
                                <li class="pb-2">
                                    <div class="col-span-6 sm:col-span-4">
                                        <label class="block font-medium text-sm text-gray-700" for="title">
                                            <span>Titre</span></label>
                                        <input v-model="form.title" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="title" type="text" autocomplete="name">
                                        <div class="mt-2" style="display: none;">
                                            <p class="text-sm text-red-600"></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="pb-2 mt-8 mb-16">
                                    <div class="col-span-6 sm:col-span-4">
                                        <label class="block font-medium text-sm text-gray-700" for="description">
                                            <span>Description</span></label>
                                        <textarea v-model="form.description" class="h-40 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="description" autocomplete="name"></textarea>
                                        <div class="mt-2">
                                            <label class="inline-flex items-center" for="heart">
                                                <input v-model="form.global" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="heart">
                                                <span class="ml-2">Ajouter média</span>
                                            </label>
                                            <div class="flex flex-col mt-6">
                                                <hr v-if="form.global" class="my-2">
                                                <label class="inline-flex items-center" for="heart-section_img_srcs" v-if="form.global">
                                                    <input v-model="form.img_src" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="heart-section_img_srcs">
                                                    <span class="ml-2">img_src ({{ title }})</span>
                                                </label>

                                                   <input v-if="form.global && form.img_src"
                                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                       type="text"
                                                      placeholder="Lien attendu"
                                                     />

                                                <!--videos-->
                                                <label class="inline-flex items-center" for="heart-section_videos" v-if="form.global">
                                                    <input v-model="form.videos" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="heart-section_videos">
                                                    <span class="ml-2">Videos ({{ title }})</span>
                                                </label>


                                                <input v-if="form.global && form.videos"
                                                       class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                       type="text"
                                                       placeholder="Lien attendu"
                                                      />
                                                <!--yt_src-->
                                                <label class="inline-flex items-center" for="heart-section_yt_src" v-if="form.global">
                                                    <input v-model="form.yt_src" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="heart-section_yt_src">
                                                    <span class="ml-2">Lien yt_src ({{ title }})</span>
                                                </label>



                                                    <input v-if="form.global && form.yt_src"
                                                           class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                           type="text"
                                                           placeholder="Lien attendu"
                                                           />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>

            </div>
          <!--
           <div v-if="isOpen" class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
               <div class="mr-3">
                   <div class="text-sm text-gray-600" style="display: none;"> Sauvardé. </div>
               </div>
               <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"> Sauvarder </button>
            </div> -->
        </div>
      </form>
    </section>
</template>

<script>
import Input from "@/Jetstream/Input";
export default {
    name: "SectionContent",
    components: {Input},
    data (){
        return{
          form:{
             title:'',
            description:'',

              global:false,
              img_src: false,
              video_src: false,
              value:"",
              yt_src: false

          },
            deleteClicked: false,


        }

    },
    props:['route','title', 'isOpen'],
    methods:{
      /*  emitTitle(item){
            this.$emit('updateTitle', item)
        }, */
      async  handleSubmit(){
        axios
            .post('http://127.0.0.1:8000/'+ this.route + '/save' ,this.fields)
            .then(response => (this.contentData = response.data))

      },
        onClick() {
            this.deleteClicked = true;
        }
    }
}
</script>

<style scoped>
.red {
    background-color: red;
}
.tab {
    overflow: hidden;
}
.tab-content {
    max-height: 0;
    transition: all 0.5s;
}
input:checked + .tab-label .test {
    background-color: #000;
}
input:checked + .tab-label .test svg {
    transform: rotate(180deg);
    stroke: #fff;
}
input:checked + .tab-label::after {
    transform: rotate(90deg);
}
input:checked ~ .tab-content {
    max-height: 100vh;
}
</style>
