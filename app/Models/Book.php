<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'publish_date',
        'sku',
        'pages',
        'price',
        'author_id'
    ];

    
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

}
