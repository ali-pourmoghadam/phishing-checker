<?php


namespace App\Services;

use App\Http\Resources\ServiceResource;
use App\Models\Log;
use GuzzleHttp\Psr7\Request;


class LogService{


    public function putLog(string $ip ,string $serviceid ,string $url ,bool $result )
    {
        Log::create([

            "service_id" => $serviceid ,

            "requester_ip" => $ip ,

            "url" => $url , 

            "result" => $result
        ]);
    }

    public function readLogs()
    {
        return Log::paginate(10);
    }


}