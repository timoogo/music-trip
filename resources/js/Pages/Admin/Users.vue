<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Utiisateurs
            </h2>
        </template>
        <div class="overflow-x-auto">
            <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
                <div class="w-full lg:w-5/6">
                    <div class="flex justify-end">
                        <inertia-link href="users/create" class="uppercase bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">ajouter un utilisateur</inertia-link>
                    </div>
                    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                            <div class="bg-white shadow-md rounded my-6">
                            <table class="min-w-max w-full table-auto">
                                <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-3 text-center">ID</th>
                                    <th class="py-3 px-3 text-center">Mail</th>
                                    <th class="py-3 px-3 text-center">Ville attribuée</th>
                                    <th class="py-3 px-3 text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="user in users[0]" :key="users[0]" class="text-gray-600 text-sm font-light">
                                    <td class="py-3 px-6 text-center">{{ user.id }} </td>
                                    <td class="py-3 px-6 text-center">{{ user.email }}</td>
                                    <td class="py-3 px-6 text-center" v-if="user.which_city_id != null">
                                        <span class="bg-black text-white py-1 px-3 rounded-full text-xs">
                                            {{ user.which_city_id }}
                                        </span>

                                    </td>
                                    <td class="py-3 px-6 text-center" v-else>
                                        <span class="bg-black text-white py-1 px-3 rounded-full text-xs">
                                            Pas assigné
                                        </span>

                                    </td>
                                    <td class="py-3 px-6 text-center" v-else>
                                        <span class="bg-black text-white py-1 px-3 rounded-full text-xs">Pas attribué</span>
                                    </td>
                                    <td class="py-3 px-6 text-center w-2/5">
                                        <div class="flex item-center justify-evenly mx-auto">
                                            <div class="w-4 mx-2 transform hover:text-purple-500">
                                                <a href="#" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">AJOUTER</a>
                                            </div>
                                            <div class="w-4 mx-2 transform hover:text-purple-500">
                                                <a href="#" class="bg-black hover:bg-grey-700 text-white font-bold py-2 px-4 rounded">SUPPRIMER</a>
                                            </div>
                                            <div class="w-4 mx-2 transform hover:text-purple-500">
                                                <a href="#" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">MODIFIER</a>
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

            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout';
    import Welcome from '@/Jetstream/Welcome';
    import axios from 'axios';
    export default {
        components: {
            AppLayout,
            Welcome,
        },
        data(){
            return {
                pays:null
            }
        },
        props:{
            users:Object,
            cities:Object

        },
        mounted() {
            axios
            .get('https://restcountries.eu/rest/v2/all')
            .then( (response) => {
                this.pays = response;
            })
            console.log(this.pays)
        }

    }
</script>
