<template>
<div class="my-8 md:grid md:grid-cols-3 md:gap-6">
<div class="md:col-span-1 flex justify-between">
    <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900">Ajout d'infos sur la ville </h3>
        <p class="mt-1 text-sm text-gray-600">WIP</p>
    </div>
</div>
<div class="mt-5 md:mt-0 md:col-span-2">
    <form  @submit.prevent="postForms">
        <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
            <section-content class="my-8" ref_id="heartstroke" title="Coup de coeur"/>
            <section-content class="my-8" ref="info" route="info" title="Ville"  />
            <section-content class="my-8" ref_id="musicgroups" title="Groupes"/>
            <section-content class="my-8" ref_id="locations" title="Lieux" />
            <section-content class="my-8" ref_id="customdata" title="Custom"/>
        </div>
        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
            <div class="mr-3">
                <div class="text-sm text-gray-600" style="display: none;"> Sauvgardé. </div>
            </div>
            <button

                class="inline-flex
                 items-center
                  px-4
                   py-2
                    bg-gray-800
                     border
                      border-transparent
                       rounded-md
                        font-semibold
                         text-xs
                          text-white
                           uppercase
                            tracking-widest
                             hover:bg-gray-700
                              active:bg-gray-900
                               focus:outline-none
                                focus:border-gray-900
                                 focus:ring
                                  focus:ring-gray-300
                                   disabled:opacity-25
                                    transition">Sauvarder globalement
            </button> <!--SAUGARDER GLOBALEMENT-->
        </div>
    </form>
</div>
</div>
</template>

<script>

import SectionContent from "@/Pages/Admin/Components/SectionContent";
export default {
    name: "SectionHolder",
    components: {SectionContent},
    data () {
        return {

        }
    },
    methods:{
        postForms(){

            for( const l of ['heartstroke',
                'info',
                'musicgroups',
                'locations',
                'customdata']){

            }
            this.$refs.info.handleSubmit();
        }
    }

}
</script>
<style scoped>

</style>
