<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Création d'un utilisateur
            </h2>
        </template>
        <div class="min-h-screen bg-gray-100">
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div>
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1 flex justify-between">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium text-gray-900"> Informations du profile </h3>
                                <p class="mt-1 text-sm text-gray-600"> Mettez les informations liées au profile. </p>
                            </div>
                            <div class="px-4 sm:px-0"></div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form @submit.prevent="handleSubmit">
                                <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                                    <div class="grid grid-cols-6 gap-6">
                                        <!-- Profile Photo -->
                                        <!--v-if-->
                                        <!-- Name -->
                                        <div class="col-span-6 sm:col-span-4">
                                            <label class="block font-medium text-sm text-gray-700" for="name"><span>Nom du chroniqueur</span></label>
                                            <input v-model="form.name" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="name" type="text" autocomplete="name" tabindex="1">
                                            <div class="mt-2" style="display: none;">
                                                <p class="text-sm text-red-600"></p>
                                            </div>
                                        </div>
                                        <!-- Email -->
                                        <div class="col-span-6 sm:col-span-4">
                                            <label class="block font-medium text-sm text-gray-700" for="email"><span>Email du chroniqueur</span></label>
                                            <input v-model="form.email" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="email" type="email" tabindex="2">
                                            <div class="mt-2" style="display: none;">
                                                <p class="text-sm text-red-600"></p>
                                            </div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-4">
                                            <label class="block font-medium text-sm text-gray-700" for="password">
                                                <span>Mot de passe</span>
                                            </label>
                                            <input v-model="form.password" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="password" type="password" tabindex="3">
                                            <div class="mt-2" style="display: none;">
                                                <p class="text-sm text-red-600"></p>
                                            </div>
                                        </div>


                                        <div class="col-span-6 sm:col-span-4">
                                            <label class="block font-medium text-sm text-gray-700" for="which_city_id">
                                                <span>Ville assignée</span>
                                            </label>
                                            <input v-model="form.which_city_id" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="which_city_id" type="text" tabindex="4">
                                            <div class="mt-2" style="display: none;">
                                                <p class="text-sm text-red-600"></p>
                                            </div>
                                        </div>

                                    </div>
                                    <label for="is_super_chroniqueur" class="flex justify-start items-start">
                                        <div class="bg-white border-2 rounded border-gray-400 w-6 h-6 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                            <input  v-model="form.is_super_chroniqueur" type="checkbox" class="text-indigo-600 rounded" id="is_super_chroniqueur">
                                        </div>


                                        <span class="select-none">Super chroniqueur</span>
                                    </label>
                                </div>
                                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                                    <div class="mr-3">
                                        <div class="text-sm text-gray-600" style="display: none;"> Sauvgardé. </div>
                                    </div>
                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"> Sauvarder </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="hidden sm:block">
                        <div class="py-8">
                            <div class="border-t border-gray-200"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>


<script>
import AppLayout from "@/Layouts/AppLayout";


export default {
name: "Create",
    components:{
        AppLayout,
    },
    props:['new_user'],
    data(){
        return{
            form:{
                name:'',
                email:'',
                password:'',
                which_city_id:'',
                is_super_chroniqueur:false,
            }
        }
    },
    methods:{
      async  handleSubmit(){
           let response = await this.$inertia.post('/users/save', this.form)
        }
    }

}
</script>

<style scoped>

</style>
