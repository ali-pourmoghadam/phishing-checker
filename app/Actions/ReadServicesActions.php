<?php


namespace App\Actions;

use App\Models\Service;

class ReadServicesActions {


    public function execute()
    {
        return Service::all();
    }
}