<script setup>
import { ref } from "@vue/reactivity";


defineProps({
    theme : Boolean
})

let userInput= ref("")
</script>

<template>
 
    <section class="w-4/6 mx-auto mt-24">
        
        <h1 class="text-center font-bold text-xl">Welcome to Phishing Checker</h1>

        <p class="text-center text-sm font-semibold mt-6">

            you can simply enter any url in the below field then and hit button to see the result

        </p>

        <input type="text"

         v-model="userInput" 

         placeholder="Enter url here ..."

         :class="{
            'p-2 border w-3/6 h-8 rounded-md block mt-16 border-gray-900 mx-auto text-black text-sm' : true 
            
         }"
        
        >

        <button 
    
                :class="{
                    'rounded-2xl block mx-auto w-28 h-8 mt-9 text-sm font-semibold' : true,
                    'bg-slate-800 text-white' : theme == true ,
                    'bg-slate-50 text-black' : theme == false 
                }"
        >check</button>
    </section>

</template>