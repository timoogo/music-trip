<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Villes
            </h2>
        </template>
        <div class="overflow-x-auto">
            <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
                <div class="w-full lg:w-5/6">
                    <div class="flex justify-end">
                        <inertia-link href="users/create" class="uppercase bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">ajouter un utilisateur</inertia-link>
                    </div>
                    <div class="bg-white shadow-md rounded my-6">
                        <table class="min-w-max w-full table-auto">
                            <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-3 text-center">ID</th>
                                <th class="py-3 px-3 text-center">a</th>
                                <th class="py-3 px-3 text-center">b</th>
                                <th class="py-3 px-3 text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="text-gray-600 text-sm font-light">
                                <td class="py-3 px-6 text-center">1</td>
                                <td class="py-3 px-6 text-center">Mail@mail.fr</td>
                                <td class="py-3 px-6 text-center">
                                    <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Paris</span>
                                </td>
                                <td class="py-3 px-6 text-center">yo</td>
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
}
</script>
