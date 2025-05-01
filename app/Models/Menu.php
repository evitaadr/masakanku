<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_menu';

    protected $fillable = [
        'name_menu',
        'price_menu',
        'description_menu',
        'image_menu',
        'id_categories',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_categories', 'id_categories');
    }
}
