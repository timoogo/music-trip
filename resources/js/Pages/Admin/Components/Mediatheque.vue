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

                        <label class="inline-flex items-center" for="heart">
                            <input v-model="checked.heart.global" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="heart">
                            <span class="ml-2">Coup de coeur</span>
                        </label>
                    <label class="inline-flex items-center" for="city">
                        <input v-model="checked.city.global" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="city">
                        <span class="ml-2">Ville</span>
                    </label>
                    <label class="inline-flex items-center" for="locations">
                        <input v-model="checked.location.global" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="locations">
                        <span class="ml-2">Lieux</span>
                    </label>
                    <label class="inline-flex items-center" for="groups">
                        <input  v-model="checked.group.global" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="groups">
                        <span class="ml-2">Groupes</span>
                    </label>
                    <label class="inline-flex items-center" for="custom">
                        <input v-model="checked.custom.global" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="custom">
                        <span class="ml-2">Custom</span>
                    </label>
                </div>
                <div class="flex flex-col h-48 ml-24 justify-between max-w-max">
                    <div class="flex flex-row justify-evenly w-108">
                        <!--ici-->
                        <label class="inline-flex items-center" for="heart-section_photos" v-if="checked.heart.global">
                            <input v-model="checked.heart.photos" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="heart-section_photos">
                            <span class="ml-2">Photos (heart)</span>
                        </label>
                        <!--videos-->
                        <label class="inline-flex items-center" for="heart-section_videos" v-if="checked.heart.global">
                            <input v-model="checked.heart.videos" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="heart-section_videos">
                            <span class="ml-2">Videos</span>
                        </label>
                        <!--YT-->
                        <label class="inline-flex items-center" for="heart-section_yt" v-if="checked.heart.global">
                            <input v-model="checked.heart.yt" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="heart-section_yt">
                            <span class="ml-2">Lien YT</span>
                        </label>
                                                                      <!--city-->
                        <label class="inline-flex items-center" for="city-section_photos" v-if="checked.city.global">
                            <input v-model="checked.city.photos" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="city-section_photos">
                            <span class="ml-2">Photos (city)</span>
                        </label>
                        <!--videos-->
                        <label class="inline-flex items-center" for="city-section_videos" v-if="checked.city.global">
                            <input v-model="checked.city.videos" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="city-section_videos">
                            <span class="ml-2">Videos</span>
                        </label>
                        <!--YT-->
                        <label class="inline-flex items-center" for="city-section_yt" v-if="checked.city.global">
                            <input v-model="checked.city.yt" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="city-section_yt">
                            <span class="ml-2">Lien YT</span>
                        </label>
                                                                    <!--LOCATION-->
                        <label class="inline-flex items-center" for="locations-section_photos" v-if="checked.location.global">
                            <input v-model="checked.location.photos" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="locations-section_photos">
                            <span class="ml-2">Photos (city)</span>
                        </label>
                        <!--videos-->
                        <label class="inline-flex items-center" for="locations-section_videos" v-if="checked.location.global">
                            <input v-model="checked.location.videos" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="locations-section_videos">
                            <span class="ml-2">Videos</span>
                        </label>
                        <!--YT-->
                        <label class="inline-flex items-center" for="locations-section_yt" v-if="checked.location.global">
                            <input v-model="checked.location.yt" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="locations-section_yt">
                            <span class="ml-2">Lien YT</span>
                        </label>
                                                                <!--GROUPS-->
                        <label class="inline-flex items-center" for="groups-section_photos" v-if="checked.group.global">
                            <input v-model="checked.group.photos" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="groups-section_photos">
                            <span class="ml-2">Photos (city)</span>
                        </label>
                        <!--videos-->
                        <label class="inline-flex items-center" for="groups-section_videos" v-if="checked.group.global">
                            <input v-model="checked.group.videos" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="groups-section_videos">
                            <span class="ml-2">Videos</span>
                        </label>
                        <!--YT-->
                        <label class="inline-flex items-center" for="groups-section_yt" v-if="checked.group.global">
                            <input v-model="checked.group.yt" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="groups-section_yt">
                            <span class="ml-2">Lien YT</span>
                        </label>
                                                            <!--CUSTOM-->
                        <label class="inline-flex items-center" for="custom-section-photos" v-if="checked.custom.global">
                            <input v-model="checked.custom.photos" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="custom-section-photos">
                            <span class="ml-2">Photos (city)</span>
                        </label>
                        <!--videos-->
                        <label class="inline-flex items-center" for="custom-section-videos" v-if="checked.custom.global">
                            <input v-model="checked.custom.videos" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="custom-section-videos">
                            <span class="ml-2">Videos</span>
                        </label>
                        <!--YT-->
                        <label class="inline-flex items-center" for="custom-section-yt" v-if="checked.custom.global">
                            <input v-model="checked.custom.yt" type="checkbox" class="form-checkbox text-indigo-600 rounded" id="custom-section-yt">
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
            heart:{
                global:false,
                photos:false,
                videos:false,
                yt:false
            },
            city:{
                global: false,
                photos:false,
                videos:false,
                yt:false
            },
            location:{
                global:false,
                photos:false,
                videos:false,
                yt:false
            },
            group:{
                global: false,
                photos:false,
                videos:false,
                yt:false
            },
            custom:{
                global:false,
                photos:false,
                videos:false,
                yt:false
            },
        },
    }
    }
}
</script>

<style scoped>

</style>
