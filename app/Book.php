<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'toko';
    protected $fillable = [
        'id',
        'title',
        'author',
        'date_published',
        'number_ofpages',
        'type_ofbooks',
        'updated_at',
        'created_at'
    ];
    
    protected $primaryKey = 'id';
}
