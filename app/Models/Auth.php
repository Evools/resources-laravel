<?php

namespace App\Models;

use App\Http\Middleware\Auth as MiddlewareAuth;
use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    protected $auth = [
        'auth' => MiddlewareAuth::class,
    ];
}
