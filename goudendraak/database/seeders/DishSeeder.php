<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Dish;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create(['name' => 'Soep']);

        // Template for dishes, leaving empty will result in whitespace instead of null in DB
//        Dish::create([
//            'number' => '',
//            'number_addition' => '',
//            'name' => '',
//            'description' => '',
//            'price' => '',
//            'category_id' => '',
//            'spiciness' => '',
//            'deliverable' => '',
//        ]);
        Dish::create([
            'number' => '1',
            'name' => 'Soep Ling Fa',
            'description' => 'Heerlijke soep met kipblokjes, champignon en asperges.',
            'price' => '3.80',
            'category_id' => '1',
            'deliverable' => '0',
        ]);
        Dish::create([
            'number' => '2',
            'name' => 'Kippensoep',
            'description' => 'Soep met kip en groenten.',
            'price' => '2.90',
            'category_id' => '1',
            'deliverable' => '0',
        ]);
    }
}
