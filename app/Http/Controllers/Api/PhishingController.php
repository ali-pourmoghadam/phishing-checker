<?php

namespace App\Http\Controllers\Api;

use App\Actions\ReadServicesActions;
use App\Http\Controllers\Controller;
use App\Http\Requests\PhishingRequest;
use App\Services\LogService;
use App\Services\QualityScoreService;
use Illuminate\Http\Request;

class PhishingController extends Controller
{


    public function __construct(LogService $logService)
    {
        $this->logService = $logService;
    }
   
    public function services(ReadServicesActions $services)
    {
         return response()->json(["data" => $services->execute()]);
    }

    

    public function qualityScore(PhishingRequest $request  , QualityScoreService $phisingService)
    {
        $attributes = $request->validated();

        $result = $phisingService->urlCheck($attributes["url"]);

        $this->logService->putLog($request->ip() , $attributes['service_id'] , $attributes["url"] , $result["phishing"] ); 
        
        return  response($result->json());

    }


    

}
