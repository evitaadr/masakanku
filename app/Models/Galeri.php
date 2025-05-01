<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Galeri extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_galeri';

    protected $fillable = [
        'name_galeri',
        'description_galeri',
        'image_galeri', // tambahkan ini
    ];
}
