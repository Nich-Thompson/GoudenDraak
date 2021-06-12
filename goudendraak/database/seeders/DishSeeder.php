<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Dish;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedCategories();

        // Connect to production database
        $live_database = DB::connection('mysql');

        foreach ($live_database->table('menu')->get() as $dish) {
            // Change '&eacute;' to 'é'
            $name = $dish->naam;
            $name = str_replace('&eacute;', 'é', $name);
            $description = $dish->beschrijving;
            $description = str_replace('&eacute;', 'é', $description);

            Dish::create([
                'number' => $dish->menunummer,
                'number_addition' => $dish->menu_toevoeging,
                'name' => $name,
                'description' => $description,
                'price' => $dish->price,
                'category_id' => $this->getCategoryId($dish->soortgerecht),
                'deliverable' => '0',
            ]);
        }
    }

    public function getCategoryId($categoryName) {
        $category = 0;
        switch ($categoryName) {
            case 'SOEP':
                $category = 1;
                break;
            case 'VOORGERECHT':
                $category = 2;
                break;
            case 'BAMI EN NASI GERECHTEN':
                $category = 3;
                break;
            case 'COMBINATIE GERECHTEN (met witte rijst)':
                $category = 4;
                break;
            case 'MIHOEN GERECHTEN':
                $category = 5;
                break;
            case 'CHINESE BAMI GERECHTEN':
                $category = 6;
                break;
            case 'INDISCHE GERECHTEN':
                $category = 7;
                break;
            case 'EIERGERECHTEN (met witte rijst)':
                $category = 8;
                break;
            case 'GROENTEN GERECHTEN (met witte rijst)':
                $category = 9;
                break;
            case 'VLEES GERECHTEN (met witte rijst)':
                $category = 10;
                break;
            case 'KIP GERECHTEN (met witte rijst)':
                $category = 11;
                break;
            case 'GARNALEN GERECHTEN (met witte rijst)':
                $category = 12;
                break;
            case 'OSSENHAAS GERECHTEN (met witte rijst)':
                $category = 13;
                break;
            case 'VISSEN GERECHTEN (met witte rijst)':
                $category = 14;
                break;
            case 'PEKING EEND GERECHTEN (met witte rijst)':
                $category = 15;
                break;
            case 'TIEPAN SPECIALITEITEN (met witte rijst)':
                $category = 16;
                break;
            case 'VEGETARISCHE GERECHTEN (met witte rijst)':
                $category = 17;
                break;
            case 'KINDERMENUS':
                $category = 18;
                break;
            case 'RIJSTTAFELS':
                $category = 19;
                break;
            case 'BUFFET':
                $category = 20;
                break;
            case 'DIVERSEN':
                $category = 21;
                break;
        }
        return $category;
    }

    public function seedCategories()
    {
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
        Category::create(['name' => 'Buffets']);
        Category::create(['name' => 'Diversen']);
    }
}
