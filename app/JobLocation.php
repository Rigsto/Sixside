<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobLocation extends Model
{
    protected $fillable = ['location', 'country_id'];
    protected $guarded = ['id'];

    public function country(){
        return $this->belongsTo(Country::class, 'country_id');
    }
}
