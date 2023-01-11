<?php

namespace App\Http\Controllers\Api;

use App\Actions\ReadServicesActions;
use App\Http\Controllers\Controller;
use App\Http\Requests\PhishingRequest;
use Illuminate\Http\Request;

class PhishingController extends Controller
{

   
    public function services(ReadServicesActions $services)
    {
         return response()->json(["data" => $services->execute()]);
    }


    public function qualityScore(PhishingRequest $request)
    {
        # code...
    }


    

}
