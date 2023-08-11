<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table= 'addresses';
    protected $fillable=['name','population','description'];
    use HasFactory;

    public function footballer()
    {
        return $this->hasMany(Footballer::class);
    }
}
