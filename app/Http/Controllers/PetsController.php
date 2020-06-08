<?php

namespace App\Http\Controllers;

use App\User;
use http\Client\Response;
use Illuminate\Http\Request;
use App\Pet;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PetsController extends Controller
{
    public function index()
    {
        $pets = DB::table('pets')
            ->join('colors', 'pets.color_id', '=', 'colors.id')
            ->join('breeds', 'pets.breed_id', '=', 'breeds.id')
            ->join('species', 'pets.species_id', '=', 'species.id')
            ->get();

        return response()->json($pets);
    }

    public function getOwner($id)
    {
        $pet = Pet::findOrFail($id);
        $user = User::findOrFail($pet['user_id']);
        //получаем не только данные о хозяине, но и данные о его животных
        $owner = $user->getUserData(true);

        return response()->json($owner);
    }
}
