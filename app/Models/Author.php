<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = 'authors';
    protected $fillable = [
        'name',
        'birthDay',
        'image',
        'country',
        'languish',
        'education',
        'About_author'
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
