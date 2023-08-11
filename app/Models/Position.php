<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table='positions';
    protected $fillable=['name','abbreviations','description'];
    use HasFactory;


    public function footballers()
    {
        return $this->belongsToMany(Footballer::class); 
    }
}
