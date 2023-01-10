<?php

namespace App\Contracts;

use Illuminate\Support\Facades\Http;

interface PhishingContract {

    public function __construct();

    public function urlCheck(Http $httpRequest);

}