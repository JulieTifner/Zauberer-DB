<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trick extends Model
{
    use HasFactory;


    protected $fillable = [
        'trickname',
        'description',
        'rating',
        'time',
        'image',
        'style_id',
        'storage_person_id',
        'act_person_id',
        'performance_id',
        
    ];

    public function style(){

        return $this->belongsTo(Style::class);
    }


    public function person_storage(){

        return $this->belongsTo(Person::class, 'storage_person_id');
    }

    public function person_act(){

        return $this->belongsTo(Person::class, 'act_person_id');
    }



    public function performance(){

        return $this->belongsTo(Performance::class);
    }
}
