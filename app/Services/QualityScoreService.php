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



    public function urlCheck(string $url)
    {
        $apiKey = $this->readApiKey();
        
        $url = urlencode($url);

        return Http::get("https://ipqualityscore.com/api/json/url/$apiKey/$url");
    }


}