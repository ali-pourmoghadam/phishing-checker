<script setup>
import { ref } from "@vue/reactivity";



let theme = ref(false)

</script>


<template>

    <div  :class="{

    'h-full' : true ,
    'bg-slate-800 text-white' : theme == false ,
    'bg-slate-50  text-black' : theme == true ,    

    }">
        
            <nav class="w-full flex flex-row justify-center items-start gap-3 py-5 font-bold relative ">

                <router-link to="/">Home</router-link>

                <router-link to="/About">About</router-link>

                <img 

                @click="theme = false"

                v-if="theme"

                src="/img/light.svg" class="absolute right-16 cursor-pointer w-7 h-7 -mt-1"  alt="">

                <img 

                @click="theme = true"

                v-if="!theme"

                src="/img/dark.svg" class="absolute right-16 cursor-pointer w-7 h-7 -mt-1"  alt="">



            </nav>

        <router-view :theme="theme"></router-view>

    </div>

</template>