<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function pizzas(){
        return $this->belongsToMany(Pizza::class, 'pizza_tags');
    }

    protected $hidden = [
        'updated_at'
    ];

    protected $fillable = [
        'name'
    ];

}
