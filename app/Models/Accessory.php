<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    use HasFactory;
    protected $table = 'accessories';
    protected $fillable = [
        'name',
        'use',
        'price',
        'image',
        'type_id',
    ];
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
