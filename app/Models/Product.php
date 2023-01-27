<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'user_id', 
        'lab_id',
        'name_product',
        'slug_product',
        'des_product',
        'category_id',
        'foto_cover',
        'foto_1',
        'foto_2',
        'foto_3',
        'foto_4',
        'foto_5',
        'status_product',
        'status_product',
        'price_before',
        'price_min',
        'price_max'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function laboratorium(){
        return $this->belongsTo('App\Models\Laboratorium','lab_id');
    }
}