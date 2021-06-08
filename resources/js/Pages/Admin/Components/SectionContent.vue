<template>
    <section class="shadow row">
        <div class="tabs">
            <div class="border-b tab">
                <div class="border-l-2 border-transparent relative">
                    <input class="w-full absolute z-10 cursor-pointer opacity-0 h-5 top-6" type="checkbox"  id="chck1"> <!--v-if="sections.heartStroke.toggleIsOpen"-->
                    <header class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none tab-label" for="chck1">
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
                                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="title" type="text" autocomplete="name">
                                        <div class="mt-2" style="display: none;">
                                            <p class="text-sm text-red-600"></p>
                                        </div>
                                    </div>
                                   <div class="hidden"> {{ content }}</div>
                                </li>
                                <li class="pb-2 mt-8 mb-16">
                                    <div class="col-span-6 sm:col-span-4">
                                        <label class="block font-medium text-sm text-gray-700" for="description">
                                            <span>Description</span></label>
                                        <textarea class="h-40 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="description" autocomplete="name"></textarea>
                                        <div class="mt-2" style="display: none;">
                                            <p class="text-sm text-red-600"></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Input from "@/Jetstream/Input";
export default {
    name: "SectionContent",
    components: {Input},
    data (){
        return {

        }
    },
    props:['title', 'content'],
    methods:{
        emitTitle(item){
            this.$emit('updateTitle', item)
        }
    }
}
</script>

<style scoped>
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
