<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}