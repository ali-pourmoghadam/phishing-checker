<script setup>
import { reactive, ref } from "@vue/reactivity";
import { onMounted } from "vue";


const domain = "http://localhost:8000/";

let services = ref([])
let url = ref("")
let choose = ref(1)
let result = ref({})

defineProps({
    theme : Boolean
})



onMounted(()=>{

        axios.get(domain +"api/v1/services" , {
            
            headers: {

            'content-type': 'appliactions/json'

            }

        })
         .then((response) => {

            services.value =  response.data.data;

            console.log(services)
            
         })
         .catch((error) => {
        
            console.log(error);

         });


})




function check(){


    axios.post(domain +"api/v1/qualityscore" , 
    
            {
                url : url.value ,
                service_id : choose.value
            }

         , {
            
            headers: {

            'content-type': 'appliactions/json'

            }

        })
         .then((response) => {

            result.value = response.data

         })
         .catch((error) => {
        
            console.log(error);

         });



}

</script>

<template>
 
    <section class="w-4/6 mx-auto mt-24">
        
        <h1 class="text-center font-bold text-xl">Welcome to Phishing Checker</h1>

        <p class="text-center text-sm font-semibold mt-6">

            you can simply enter any url in the below field then choose service  and hit button to see the result !

        </p>

        <input type="text"

         v-model="url" 

         placeholder="Enter url here ..."

         :class="{
            'p-2 border w-3/6 h-8 rounded-md block mt-16 border-gray-900 mx-auto text-black text-sm' : true 
            
         }"
        
        >
      

        <select v-model="choose" class="mt-5 w-2/6 rounded block text-xs text-black mx-auto " v-if="services">



            <option v-for="service in services" :value="service.id" >{{ service.name  }}</option>
        

        </select>

        <button 
                @click="check()"
                :class="{
                    'rounded-2xl block mx-auto w-28 h-8 mt-9 text-sm font-semibold' : true,
                    'bg-slate-800 text-white' : theme == true ,
                    'bg-slate-50 text-black' : theme == false 
                }"
        >check
        </button>
    </section>


    <section class="w-3/6 block mx-auto" v-if="result.message">

        <h1 class="text-lg  font-semibold">Query result :</h1>

            <div class="ml-10 mt-5 font-bold">
                <div class="mt-2">
                    message : {{ result.message }}
                </div>
                <div class="mt-2">
                    unsafe : {{ result.unsafe }}
                </div>
                <div class="mt-2">
                    domain : {{ result.domain }}
                </div>
                <div class="mt-2">
                    ip_address : {{ result.ip_address }}
                </div>
                <div class="mt-2">
                    malware : {{ result.malware }}
                </div>
                <div class="mt-2">
                    phishing : {{ result.phishing }}
                </div>
                <div class="mt-2">
                    suspicious : {{ result.suspicious }}
                </div>
                <div class="mt-2">
                    adult : {{ result.adult }}
                </div>
                <div class="mt-2">
                    resk_score : {{ result.risk_score }}
                </div>

            </div>
     
    </section>

</template>