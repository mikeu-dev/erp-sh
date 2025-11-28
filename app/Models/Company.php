<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'code',
        'tax',
        'tagline',
        'director',
        'email',
        'phone',
        'bank',
        'number',
        'address',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
