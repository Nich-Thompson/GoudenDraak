<?php

namespace Database\Seeders;

use App\Models\Allergy;
use App\Models\DishAllergy;
use Illuminate\Database\Seeder;

class AllergySeeder extends Seeder
{
    public function run()
    {
        Allergy::create(['name' => 'bevat gluten']);
        Allergy::create(['name' => 'bevat lactose']);
        Allergy::create(['name' => 'bevat varkensvlees']);

        DishAllergy::create(["dish_id" => 1, "allergy_name" => 'bevat lactose']);
        DishAllergy::create(["dish_id" => 1, "allergy_name" => 'bevat gluten']);
        DishAllergy::create(["dish_id" => 5, "allergy_name" => 'bevat varkensvlees']);
        DishAllergy::create(["dish_id" => 6, "allergy_name" => 'bevat gluten']);
        DishAllergy::create(["dish_id" => 22, "allergy_name" => 'bevat gluten']);
        DishAllergy::create(["dish_id" => 11, "allergy_name" => 'bevat varkensvlees']);
        DishAllergy::create(["dish_id" => 12, "allergy_name" => 'bevat varkensvlees']);
        DishAllergy::create(["dish_id" => 12, "allergy_name" => 'bevat lactose']);
        DishAllergy::create(["dish_id" => 20, "allergy_name" => 'bevat gluten']);
        DishAllergy::create(["dish_id" => 20, "allergy_name" => 'bevat varkensvlees']);
    }
}
