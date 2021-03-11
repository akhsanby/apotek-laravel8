<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    protected $fillable = ['icon', 'code', 'supplier_id', 'name_drug', 'producer', 'stock', 'price'];

    public function supplier()
    {
    	return $this->belongsTo(Supplier::class);
    }
}
