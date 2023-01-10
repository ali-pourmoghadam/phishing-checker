<?php

namespace App\Traits;


trait PhishingTrait{

    private function  readApiKey(){

        return  $this->service->apiKey->key;
        
    }

}