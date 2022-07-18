<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Returns all animals in alphabetical order.
     */
    public function index(){
        $allAnimals = Animal::latest()->get();

        // TODO: sort by alphabetical order

        return response()->json([
            "animals" => $allAnimals
        ]);
    }


    /**
     * Returns a specific animal.
     */
    public function show(Animal $animal){
        return response()->json([
            "animal" => $animal
        ]);
    }
}
