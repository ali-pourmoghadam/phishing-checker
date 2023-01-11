<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>

    @vite('resources/js/app.js')
</head>
<body class="h-full">

    <div  class="w-full h-full bg-slate-50 mx-auto block ">
        <div class=" relative p-2 rounded-md mx-auto block bg-slate-800" style="width:500px; height: 300px; top:100px;">

            <h1 class=" text-white  text-center text-xl">Admin Login</h1>

            <div class="w-4/6 block mx-auto mt-5 text-white">
                <label class="block">email :</label>
                <input id="email" class=" rounded-md block mt-2  mx-auto text-black"  type="text">
            </div>
            <div class="w-4/6 block mx-auto mt-5 text-white">
                <label class="block">password :</label>
                <input id="password" type="password" class=" rounded-md block mt-2 mx-auto text-black" type="text">
            </div>

            <button onclick="login()" class="rounded-2xl block mx-auto w-28 h-8 mt-9 text-sm font-semibold bg-slate-50 text-black">login</button>
        </div>
    </div>
    
</body>


<script>


    function login()
    {

    
        let email =  document.querySelector("#email");
        let password =  document.querySelector("#password");

        let xhttp = new XMLHttpRequest()
        let form = new FormData()

        form.append("email" , email.value)
        form.append("password" , password.value)
        form.append("_token" , "{{ csrf_token() }}")


        xhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {
           
                window.location.replace("http://localhost:8000/adminpanel")

            }
        };

        xhttp.open("POST", "http://localhost:8000/adminlogin");
        xhttp.send(form);

    }
</script>
</html>