<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurFilm extends Model
{
    use HasFactory;

    protected $table = 'our_film';

    protected $fillable=[
        'title',
        'id',
        'image',
        'description',
        'link',
        'updated_at',
        'created_at',
    ];
}
