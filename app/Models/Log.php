<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'user_key', 'log_ip','log_time','log_page','log_method','log_rkey','log_rdata','log_user_agent','log_request_url',
    ];
}
