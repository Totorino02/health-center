<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieProduit extends Model
{
    use HasFactory;
    public $timestamps = false;


    public function produits()
    {
        return $this->hasMany(Produit::class, 'categorie_id');
    }
}
