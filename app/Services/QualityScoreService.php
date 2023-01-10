<?php


namespace App\Services;

use App\Contracts\PhishingContract;
use App\Models\Service;
use App\Traits\PhishingTrait;
use Illuminate\Support\Facades\Http;

class QualityScoreService implements PhishingContract{


    use PhishingTrait;


    public function __construct()
    {
       $this->service = Service::where("name" , "QualityScore")->first();
   
    }



    public function urlCheck(Http $httpRequest,string $url)
    {
        $apiKey = $this->readApiKey();
        
        return  Http::get("https://ipqualityscore.com/api/json/url/$apiKey/$url")->json();
    }


}