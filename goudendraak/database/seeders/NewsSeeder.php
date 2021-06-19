<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run()
    {
        News::create(["title" => "Nasi is vandaag op", "body" => "Door een tekort bij onze leverancier is de nasi vandaag op."]);
        News::create(["title" => "Gesloten op 26 juli", "body" => "Door het Chinese nieuwjaar zijn we gesloten op 26 juli."]);
    }
}
