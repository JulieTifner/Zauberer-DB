<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    use HasFactory;


    protected $fillable = [
        'type',
        
    ];

    public function trick()
    {
        return $this->hasMany(Trick::class);
    }
}
