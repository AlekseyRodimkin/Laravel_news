<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    use HasFactory;

    /**
     * Атрибуты, которые можно массово назначать.
     *
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
