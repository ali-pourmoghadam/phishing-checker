import { createRouter , createWebHistory } from "vue-router";
import Home from "./components/Home.vue"
import About from "./components/About.vue"



const routes = [
    {
        path : "/"  ,
        name : "HOME" ,
        component : Home
    },
    {
        path : "/About"  ,
        name : "About" ,
        component : About
    }
]

const router = createRouter({
     history : createWebHistory(import.meta.env.BASE_URL) ,
     routes
})


export default router