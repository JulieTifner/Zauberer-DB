<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'path',
    ];

    public function trick(){

        return $this->belongsToMany(Trick::class);
    }
}
