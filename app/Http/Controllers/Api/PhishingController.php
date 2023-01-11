<?php

namespace App\Http\Controllers\Api;

use App\Actions\ReadServicesActions;
use App\Http\Controllers\Controller;
use App\Http\Requests\PhishingRequest;
use App\Services\QualityScoreService;
use Illuminate\Http\Request;

class PhishingController extends Controller
{

   
    public function services(ReadServicesActions $services)
    {
         return response()->json(["data" => $services->execute()]);
    }


    public function qualityScore(PhishingRequest $request  , QualityScoreService $service)
    {
        $url =  $request->input("url");

        return  $service->urlCheck($url);

    }


    

}
