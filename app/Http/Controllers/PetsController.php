<?php

namespace App\Http\Controllers;

use App\Pet;
use App\User;
use http\Client\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PetsController extends Controller
{
    /**
     *  Метод возвращает каталог животных
     *
     * @return JsonResponse
     */
    public function index()
    {
        $pets = DB::table('pets')
			->select('pets.id',  'pets.gender', 'pets.name_real', 'pets.likes_count', 'pets.awards_site', 'pets.awards', 'colors.color', 'breeds.breed', 'species.species')
            ->join('colors', 'pets.color_id', '=', 'colors.id')
            ->join('breeds', 'pets.breed_id', '=', 'breeds.id')
            ->join('species', 'pets.species_id', '=', 'species.id')
            ->get();

        return response()->json($pets);
    }

    /**
     * Метод возвращает данные о хозяине животного и всех его животных
     *
     * @param Pet $pet
     * @return JsonResponse
     */
    public function getOwner(Pet $pet)
    {
        $user = User::findOrFail($pet['user_id']);
        //получаем не только данные о хозяине, но и данные о его животных
        $owner = $user->getUserData(true);

        return response()->json($owner);
    }

    /**
     * Метод возвращает данные о животном
     *
     * @param Pet $pet
     * @return array
     */
    public function getPet(Pet $pet){
        //получаем не только данные о животном но и данные о его хозяине
        return $pet->getPetData(true);
    }
}
