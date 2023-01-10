<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\ApiKey;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $adminPass = "admin";


        $admin = Admin::create([

            "email" =>  "admin@root.com" ,
            "password" => bcrypt($adminPass) 
        ]);


        $qualityScore = Service::create([
            "name" => "QualityScore" ,
            "status" => true
        ]);


        ApiKey::create([
            "service_id" => $qualityScore->id,
            "key" => "BEZeoWi9a1oARP6oh7B0gLEXwskRSrlK"
        ]);


        echo "  Service {$qualityScore->name} Created Successfully".PHP_EOL;
        echo "  Api key {$qualityScore->name} Generated Successfully".PHP_EOL;
        echo "  Admin email : {$admin->email} , password : $adminPass".PHP_EOL;
    }
}
