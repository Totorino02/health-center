<?php

use App\Models\CategorieProduit;
use App\Models\Produit;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $produits = Produit::all();
    $catProd = CategorieProduit::all();
    dd($produits[2]->categorie());
    foreach ($catProd[2]->produits() as $key => $prod) {
        dd($prod);
    }
});
