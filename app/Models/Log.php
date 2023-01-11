<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        "service_id" , 
        "requester_ip",
        "url",
        "result"
    ];

    protected $with = ["service"];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
