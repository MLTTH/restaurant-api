<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    //FK
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Many to many
    public function tags(){
        return $this->belongsToMany(Tag::class, 'pizza_tags');
    }

    protected $fillable = [
        'title',
        'content',
        'price',
    ];
}
