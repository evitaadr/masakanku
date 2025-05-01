<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    //
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'id_categories';

    protected $fillable = [
        'name_categories',
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class, 'id_categories', 'id_categories');
    }
}
