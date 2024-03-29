<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;   
    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'content',
        'featured_image'
    ];
}