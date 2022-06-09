<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;

    protected $table = 'performance';


    protected $fillable = [
        'name',
    ];

    public function trick()
    {
        return $this->hasMany(Trick::class);
    }
}
