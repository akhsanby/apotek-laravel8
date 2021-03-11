<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = ['name_supplier', 'address', 'city', 'phone'];

    public function drugs()
    {
    	return $this->hasMany(Drug::class);
    }
}
