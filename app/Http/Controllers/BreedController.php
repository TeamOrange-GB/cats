<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Breed;

class BreedController extends Controller
{
    public function index()
    {
    $breeds = Breed::query()
    ->select('breeds.id', 'breed', 'breed_info')
    ->get();
    dump($breeds);
    $breedsJSON = json_encode($breeds, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    return response($breedsJSON);
    }
}
