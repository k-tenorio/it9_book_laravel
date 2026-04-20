<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $fillable = [
        'book_name',
        'book_author',
        'book_stock',
        'book_date',
    ];
}