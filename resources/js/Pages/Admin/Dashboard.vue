<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div class="flex justify-end">
                    <inertia-link href="cities/create" class="uppercase bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">ajouter une ville</inertia-link>
                </div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-max w-full table-auto">
                            <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-3 text-center">N°</th>
                                <th class="py-3 px-3 text-left">Ville</th>
                                <th class="py-3 px-3 text-center">Sections</th>
                                <th class="py-3 px-3 text-center">Complété ?</th>
                                <th class="py-3 px-3 text-center w-2/5">Actions</th>
                            </tr>
                            </thead>
                            <tbody v-for="city in citiesNames " class="text-gray-600 text-sm font-light">
                            <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                                <td class="py-3 px-6 text-center">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <span class="font-medium">{{ city.id }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <span>{{ city.name }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center justify-start">
                                       <span class="bg-blue-700 px-5 py-3 text-sm shadow-sm font-medium tracking-wider border text-gray-100 rounded-full hover:shadow-lg hover:bg-gray-800">Ville</span>
                                       <span class="bg-yellow-200 px-5 py-3 text-sm shadow-sm font-medium tracking-wider border text-gray-900 rounded-full hover:shadow-lg hover:bg-gray-800 hover:text-white">Groupe</span>
                                       <span class="bg-gray-700 px-5 py-3 text-sm shadow-sm font-medium tracking-wider border text-gray-100 rounded-full hover:shadow-lg hover:bg-gray-800">Events</span>
                                       <span class="bg-red-200 px-5 py-3 text-sm shadow-sm font-medium tracking-wider border text-gray-100 rounded-full hover:shadow-lg hover:bg-gray-800">Lieux</span>
                                    </div>
                                </td>
                                <td v-if="city.isCompleted == 1" class="py-3 px-6 text-center">
                                    <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Completé</span>
                                </td>
                                <td v-else-if="city.isCompleted == 0" class="py-3 px-6 text-center">
                                    <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Pas complété</span>
                                </td>
                                <td v-else-if="city.isCompleted == null" class="py-3 px-6 text-center">
                                    <span class="bg-yellow-400 text-orange-900 py-1 px-3 rounded-full text-xs">Erreur</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-evenly mx-auto">
                                        <div class="w-4 mx-2 transform hover:text-purple-500">
                                            <a href="#" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">VOIR</a>
                                        </div>

                                        <div class="w-4 mx-2 transform hover:text-purple-500">
                                            <a href="#" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">MODIFIER</a>
                                        </div>
                                       <div class="w-4 mx-2 transform hover:text-purple-500">
                                            <a href="#" class="bg-black hover:bg-grey-700 text-white font-bold py-2 px-4 rounded">SUPPRIMER</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'



    export default {
        components: {
            AppLayout,
            Welcome,
        },
        data(){
            return {
                citiesNames:null,
                cities:null
            }
        },
        methods(){
 /*           req1: () => {
                const getCityInfo ="http://127.0.0.1:8000/api/info";
                axios
                    .get(getCityInfo)
                    .then(response => {
                        (this.citiesNames = response.data)
                    })
            }
                req2:() =>{
                    const getCityInfo ="http://127.0.0.1:8000/api/cities";
                    axios
                        .get(getCityInfo)
                        .then(response => {
                            (this.cities = response.data)
                        })
                }*/
        },
        mounted() {
            axios
                .get('http://127.0.0.1:8000/api/info')
                .then(response => {
                    (this.citiesNames = response.data)
                })
        },

    }
</script>
<style scoped>
div.flex.items-center.justify-center span{

}

</style>
