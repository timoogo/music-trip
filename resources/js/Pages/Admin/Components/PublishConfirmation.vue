<template>

    <div class="my-6 md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1 flex justify-between">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium text-gray-900">Confirmation</h3>
                <p class="mt-1 text-sm text-gray-600">Confirmer la publication</p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form>
                <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                    <label class="inline-flex items-center" for="agree">
                        <input value="agree"  v-model="canPublish"  type="checkbox" class="form-checkbox text-indigo-600 rounded" id="agree">
                        <span class="ml-2">Confirmer</span>
                    </label>
                </div>
                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <div class="mr-3">
                        <div class="text-sm text-gray-600" style="display: none;"> Publié. </div>
                    </div>
                        <button :disabled="!canPublish"  type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"> Sauvarder </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "PublishConfirmation",
    data (){
        canPublish: false
    }
}
</script>

<style scoped>

</style>
