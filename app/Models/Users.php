<?php

namespace App\Models;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatbaleContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model implements AuthenticatbaleContract
{
    use HasFactory;
    use Authenticatable;
}
