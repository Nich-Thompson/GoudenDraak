<?php

namespace Database\Seeders;

use App\Models\Allergy;
use Illuminate\Database\Seeder;

class AllergySeeder extends Seeder
{
    public function run()
    {
        Allergy::create(['name' => 'Koemelk']);
        Allergy::create(['name' => 'Kipeneielk']);
        Allergy::create(['name' => 'Pinda']);
        Allergy::create(['name' => 'Noten']);
        Allergy::create(['name' => 'Vis']);
        Allergy::create(['name' => 'Soja']);
        Allergy::create(['name' => 'Tarwe']);
        Allergy::create(['name' => 'Roosfruit']);
    }
}
