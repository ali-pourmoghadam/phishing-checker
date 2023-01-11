<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel</title>

    @vite('resources/js/admin.js')
</head>
<body class="h-full">
    
    <div class="w-full h-full bg-slate-800 text-white">

        <div class="w-full h-16 flex flex-row gap-8 justify-center items-center relative">
            <a href="/adminlogout" class="absolute left-20">
                <img class="w-7 h-7 cursor-pointer" src="/img/logout.svg" alt="">
            </a>
        </div>

        <h1 class="text-center text-lg">Users Logs Report</h1>

        <div class="w-4/6 block mx-auto mt-10">

            <table class="table-auto w-full text-center">
            <thead >
                <tr>
                <th>id</th>
                <th>service</th>
                <th>requester ip</th>
                <th>target url</th>
                <th>result</th>
                <th>Time</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($logs as $log)

                    <tr>

                        <td>{{$loop->index +1}} </td>
                        <td>{{$log->service->name}}</td>
                        <td>{{$log->requester_ip}}</td>
                        <td>{{$log->url}}</td>
                        <td>{{(!$log->result) ? "clean" : "phishing"}}</td>
                        <td>{{$log->created_at}}</td>
                    </tr>
          

                @endforeach
               
            
            </tbody>
            </table>

        </div>
    </div>
  
</body>
</html>