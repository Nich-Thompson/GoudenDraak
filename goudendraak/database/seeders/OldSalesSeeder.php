<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Dish;
use App\Models\Sale;
use App\Models\SaleDish;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OldSalesSeeder extends Seeder
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

        foreach ($live_database->table('salesOld')->get() as $sale) {
            $newSale = Sale::create([
                'table' => 1,
                'created_at' => $sale->saleDate,
            ]);
            for ($i = 0; $i < $sale->amount; $i++) {
                SaleDish::create([
                    'sales_id' => $newSale->id,
                    'dishes_id' => $sale->itemId,
                    'created_at' => $sale->saleDate,
                ]);
            }
        }
    }
}
