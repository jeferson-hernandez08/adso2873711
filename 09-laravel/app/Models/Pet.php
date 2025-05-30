<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'photo',
        'kind',
        'weight',
        'age',
        'breed',
        'location',
        'active',
        'status'
    ];
}
