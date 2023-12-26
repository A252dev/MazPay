<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    use HasFactory;
    protected $table = 'sections';
    public $timestamps = false;
    protected $fillable = [
        'nickname',
        'product',
        'category',
        'small_description',
        'big_description',
        'price',
        'in_stock',
        'status',
    ];
}
