<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $table = 'families';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'relasi',
        'umur',
    ];
}