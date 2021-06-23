<template>

    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Création d'une ville
            </h2>
        </template>

        <div class="min-h-screen bg-gray-100">
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div>
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1 flex justify-between">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium text-gray-900"> Informations du profile </h3>
                                <p class="mt-1 text-sm text-gray-600"> Mettez les informations liées au profile . </p>
                            </div>
                            <div class="px-4 sm:px-0"></div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">

                                <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                                    <div class="grid grid-cols-6 gap-6">

                                        <div class="col-span-6 sm:col-span-4">
                                            <label class="block font-medium text-sm text-gray-700" for="name"><span>Ville</span></label>
                                            <input  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="name" type="text" autocomplete="name">
                                        </div>
                                        <div class="col-span-6 sm:col-span-4 flex justify-center">
                                            <div class="flex justify-center mx-auto w-full h-full">
                                                <!--
                                                <img :src="map" alt="" srcset="">
                                            -->
                                              <div class="w-5/12 h-5/12">
                                               <!--   <Map/> -->
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                                    <div class="mr-3">
                                        <div class="text-sm text-gray-600" style="display: none;"> Sauvardé. </div>
                                    </div>
                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"> Sauvarder </button>
                                </div>

                        </div>
                    </div>
                    <div class="hidden sm:block">
                        <div class="py-8">
                            <div class="border-t border-gray-200"></div>
                        </div>
                    </div>
                </div>

                <SectionHolder/>
                <!--  -->



                <!--  -->
              <!--  <Mediatheque/> -->

                <PublishConfirmation/>
            </div>
        </div>
    </app-layout>
</template>
<script>
import AppLayout from "@/Layouts/AppLayout";
import Mediatheque from "@/Pages/Admin/Components/Mediatheque";
import DraggableSection from "@/Pages/Sandbox/DraggableSection";
import SectionHolder from "@/Pages/Admin/Components/SectionHolder";
import PublishConfirmation from "@/Pages/Admin/Components/PublishConfirmation";
import Map from "@/Pages/Client/Map";

export default {
    name: "Create",
    components:{
        Map,
        PublishConfirmation,
        SectionHolder,
        AppLayout,
        Mediatheque,

      //  DraggableSection
    },
    data(){
        return {
            fields:{
                city_id:1
            },
            success:false,
            loaded:true,
        }
    },
    methods:{

    }

}
</script>
<style scoped lang="scss">

.map {
    width:100%;
    height:  85vh;
    background: #fff;
}
</style>
