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
        Category::create(['name' => 'Voorgerechten']);
        Category::create(['name' => 'Bami & Nasi']);
        Category::create(['name' => 'Combinatie']);
        Category::create(['name' => 'Mihoen']);
        Category::create(['name' => 'Chinese Bami']);
        Category::create(['name' => 'Indisch']);
        Category::create(['name' => 'Ei']);
        Category::create(['name' => 'Groenten']);
        Category::create(['name' => 'Vlees']);
        Category::create(['name' => 'Kip']);
        Category::create(['name' => 'Garnalen']);
        Category::create(['name' => 'Ossenhaas']);
        Category::create(['name' => 'Vis']);
        Category::create(['name' => 'Peking Eend']);
        Category::create(['name' => 'Tiepan Specialiteiten']);
        Category::create(['name' => 'Vegetarisch']);
        Category::create(['name' => 'Kindermenu\'s']);
        Category::create(['name' => 'Rijsttafels']);

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
