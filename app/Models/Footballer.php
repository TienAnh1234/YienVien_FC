<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footballer extends Model
{
    protected $table='footballers';
    protected $fillable=['name','year_of_birth','ethnic','gender','height','weight','address_id'];
    use HasFactory;

    public function address()
    {
        return $this->belongsTo(Address::class); 
    }

    public function positions()
    {
        return $this->belongsToMany(Position::class); 
    }

}
