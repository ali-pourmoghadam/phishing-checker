<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ["name" , "status"];


    public function apiKey()
    {
        return  $this->hasOne(ApiKey::class);
    }

    public function log()
    {
        return  $this->hasMany(Log::class);
    }
}
