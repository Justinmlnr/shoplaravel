<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Category extends Model
{
    use HasFactory;

    // Colonnes autorisées pour l'assignation de masse
    protected $fillable = [
        'name',
        'slug',
        'description'
    ];

    // Colonnes cachées lors de la sérialisation JSON
    protected $hidden = [];

      public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}