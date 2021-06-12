<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Connect to production database
        $live_database = DB::connection('mysql');

        foreach ($live_database->table('menu')->get() as $dish) {
            // Get the right category id
            $category = 0;
            switch ($dish->soortgerecht) {
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
                case 'VLEES GERECHTEN (met witte rijst)':
                    $category = 11;
                    break;
                case 'KIP GERECHTEN (met witte rijst)':
                    $category = 12;
                    break;
                case 'GARNALEN GERECHTEN (met witte rijst)':
                    $category = 13;
                    break;
                case 'OSSENHAAS GERECHTEN (met witte rijst)':
                    $category = 14;
                    break;
                case 'VISSEN GERECHTEN (met witte rijst)':
                    $category = 15;
                    break;
                case 'PEKING EEND GERECHTEN (met witte rijst)':
                    $category = 16;
                    break;
                case 'TIEPAN SPECIALITEITEN (met witte rijst)':
                    $category = 17;
                    break;
                case 'VEGETARISCHE GERECHTEN (met witte rijst)':
                    $category = 18;
                    break;
                case 'KINDERMENUS':
                    $category = 19;
                    break;
                case 'RIJSTTAFELS':
                    $category = 20;
                    break;
                case 'BUFFET':
                    $category = 21;
                    break;
                case 'DIVERSEN':
                    $category = 22;
                    break;
            }

            // Change the description if conatins '&e'
//            $oldDescription = $dish->
            
            Dish::create([
                'number' => $dish->menunummer,
                'number_addition' => $dish->menu_toevoeging,
                'name' => $dish->naam,
                'description' => $dish->beschrijving,
                'price' => $dish->price,
                'category_id' => $category,
                'deliverable' => '0',
            ]);
        }
    }
}
