<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeStatus($query){
        return $query->where('status', 1)->get(); 
    }

    public function entreprise(){
        return $this->belongsTo('App\Models\Entreprise');
    }
}
