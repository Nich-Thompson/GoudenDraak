<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OldDBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $live_database = DB::connection('mysql');

        foreach ($live_database->table('menu')->get() as $dish) {
            Dish::create([
                'number' => $dish->menunummer,
                'name' => $dish->naam,
                'description' => 'Heerlijke soep met kipblokjes, champignon en asperges.',
                'price' => '3.80',
                'category_id' => '1',
                'deliverable' => '0',
            ]);
        }
    }
}
