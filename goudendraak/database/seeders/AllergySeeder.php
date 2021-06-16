<?php

namespace Database\Seeders;

use App\Models\Allergy;
use App\Models\DishAllergy;
use Illuminate\Database\Seeder;

class AllergySeeder extends Seeder
{
    public function run()
    {
        Allergy::create(['name' => 'Koemelk']);
        Allergy::create(['name' => 'Kippenei']);
        Allergy::create(['name' => 'Pinda']);
        Allergy::create(['name' => 'Noten']);
        Allergy::create(['name' => 'Vis']);
        Allergy::create(['name' => 'Soja']);
        Allergy::create(['name' => 'Tarwe']);
        Allergy::create(['name' => 'Roosfruit']);

        DishAllergy::create(["dish_id" => 1, "allergy_name" => 'Koemelk']);
        DishAllergy::create(["dish_id" => 1, "allergy_name" => 'Vis']);
        DishAllergy::create(["dish_id" => 5, "allergy_name" => 'Kippenei']);
        DishAllergy::create(["dish_id" => 6, "allergy_name" => 'Koemelk']);
        DishAllergy::create(["dish_id" => 22, "allergy_name" => 'Vis']);
        DishAllergy::create(["dish_id" => 11, "allergy_name" => 'Noten']);
        DishAllergy::create(["dish_id" => 12, "allergy_name" => 'Koemelk']);
        DishAllergy::create(["dish_id" => 12, "allergy_name" => 'Roosfruit']);
        DishAllergy::create(["dish_id" => 20, "allergy_name" => 'Tarwe']);
        DishAllergy::create(["dish_id" => 20, "allergy_name" => 'Koemelk']);


    }
}
