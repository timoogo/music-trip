<template>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1 flex justify-between">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium text-gray-900">Mediathèque</h3>
                <p class="mt-1 text-sm text-gray-600">Quelles sont les cartes qui ont besoins de médias ?</p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md flex flex-row">
                <!--LISTING-->
                <div class="flex flex-col h-48 ml-4 justify-between max-w-max ">
                    <div class="toto">
                        <label class="inline-flex items-center" for="heart">
                            <input v-model="checked['heart']" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="heart">
                            <span class="ml-2">Coup de coeur</span>
                        </label>
                    </div>
                    <label class="inline-flex items-center" for="city">
                        <input v-model="checked['city']" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="city">
                        <span class="ml-2">Ville</span>
                    </label>
                    <label class="inline-flex items-center" for="locations">
                        <input v-model="checked['locations']" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="locations">
                        <span class="ml-2">Lieux</span>
                    </label>
                    <label class="inline-flex items-center" for="groups">
                        <input  v-model="checked['groups']" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="groups">
                        <span class="ml-2">Groupes</span>
                    </label>
                    <label class="inline-flex items-center" for="custom">
                        <input v-model="checked['custom']" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="custom">
                        <span class="ml-2">Custom</span>
                    </label>
                </div>
                <div class="flex flex-col h-48 ml-24 justify-between max-w-max">
                    <div class="flex flex-row justify-evenly w-108">
                        <!--ici-->
                        <label class="inline-flex items-center" for="heart" v-if="checked['heart']">
                            <input type="checkbox" class="form-checkbox text-indigo-600 rounded" id="">
                            <span class="ml-2">Photos (heart)</span>
                        </label>
                        <!--videos-->
                        <label class="inline-flex items-center" for="heart" v-if="checked['heart']">
                            <input type="checkbox" class="form-checkbox text-indigo-600 rounded" id="">
                            <span class="ml-2">Videos</span>
                        </label>
                        <!--YT-->
                        <label class="inline-flex items-center" for="heart" v-if="checked['heart']">
                            <input type="checkbox" class="form-checkbox text-indigo-600 rounded" id="">
                            <span class="ml-2">Lien YT</span>
                        </label>
                        <label class="inline-flex items-center" for="heart" v-if="checked['city']">
                            <input type="checkbox" class="form-checkbox text-indigo-600 rounded" id="">
                            <span class="ml-2">Photos (city)</span>
                        </label>
                        <!--videos-->
                        <label class="inline-flex items-center" for="heart" v-if="checked['city']">
                            <input type="checkbox" class="form-checkbox text-indigo-600 rounded" id="">
                            <span class="ml-2">Videos</span>
                        </label>
                        <!--YT-->
                        <label class="inline-flex items-center" for="heart" v-if="checked['city']">
                            <input type="checkbox" class="form-checkbox text-indigo-600 rounded" id="">
                            <span class="ml-2">Lien YT</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                <div class="mr-3">
                    <div class="text-sm text-gray-600" style="display: none;"> Sauvgardé. </div>
                </div>
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"> Sauvarder </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
name: "Mediatheque",
    data(){
    return{
        checked: {
            heart: false,
            city:false,
            locations:false,
            groups:false,
            custom:false,
        },
    }
    }
}
</script>

<style scoped>

</style>
