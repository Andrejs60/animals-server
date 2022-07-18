<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $animals = [
            [
                "name"=> "House sparrow", "class" => "Bird", "conservation_status"=> "Least Concern", "latin_name" => "Passer domesticus"
            ],
            [
                "name"=> "Cat", "class" => "Mammal", "conservation_status"=> "Domesticated", "latin_name" => "Felis catus"
            ],
            [
                "name"=> "Dog", "class" => "Mammal", "conservation_status"=> "Domesticated", "latin_name" => "Canis familiaris"
            ],
            [
                "name"=> "Gorilla", "class" => "Mammal", "conservation_status"=> "Endangered", "latin_name" => "Gorilla gorilla"
            ],
            [
                "name"=> "American alligator", "class" => "Reptile", "conservation_status"=> "Least Concern", "latin_name" => "Alligator mississippiensis"
            ]
        ];

        foreach($animals as $animal){
            Animal::create($animal);
        }
    }
}
