<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pet extends Model
{
    use HasFactory, Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'image',
        'kind',
        'weight',
        'age',
        'breed',
        'location',
        'description',
        'active',
        'status'
    ];

    // Relationships: Pet hasOne Adoption
    public function adoption()
    {
        return $this->hasOne(Adoption::class);
    }

    // Scoope Names
    public function scopeNames($pets, $q) {
        if(trim($q)) {
            $pets->where('name', 'LIKE', "%$q%")
                  ->orWhere('kind', 'LIKE', "%$q%");
        }
    }
    
}
