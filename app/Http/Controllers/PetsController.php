<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PetsController extends Controller
{
    public function index()
    {
    //$pets = Pet::query()->get();
    $pets = DB::table('pets')
    ->join('colors', 'pets.color_id', '=', 'colors.id')
    ->join('breeds', 'pets.breed_id', '=', 'breeds.id')
    ->join('species', 'pets.species_id', '=', 'species.id')
    ->join('photos', 'pets.id', '=', 'photos.pet_id')
    ->select('pets.id',  'pets.gender', 'pets.name_real', 'pets.likes_count', 'pets.awards_site', 'pets.awards', 'colors.color', 'breeds.breed', 'species.species', 'photos.path')
    ->get();
    //dump($pets);
    //return File::put(storage_path() . '/pets.json', json_encode($pets, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    $petsJSON = json_encode($pets, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    return response($petsJSON);
    }
}
