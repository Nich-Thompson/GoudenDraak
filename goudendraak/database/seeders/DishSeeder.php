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
        $this->seedCategories();
        $this->seedSoup();
        $this->seedAppetizers();
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
    }

    public function seedSoup()
    {
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

    public function seedAppetizers()
    {
        Dish::create([
            'number' => '10',
            'name' => 'Loempia Ling Fa',
            'description' => 'Met atjar, ananas en pindasaus.',
            'price' => '6.20',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '11',
            'name' => 'Loempia Compleet',
            'description' => 'Met gesmoord rundvlees en pikante saus.',
            'price' => '6.20',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '12',
            'name' => 'Loempia met kip',
            'description' => '',
            'price' => '3.90',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '13',
            'name' => 'Loempia',
            'description' => '',
            'price' => '3.80',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '14',
            'name' => 'Chinese mini loempia (4st.)',
            'description' => '',
            'price' => '4.90',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '14',
            'number_addition' => 'A',
            'name' => 'Vegetarische mini loempia (12st.)',
            'description' => '',
            'price' => '4.90',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '15',
            'name' => 'Kroepoek',
            'description' => '',
            'price' => '2.50',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '15',
            'number_addition' => 'A',
            'name' => 'Casave Kroepoek',
            'description' => '',
            'price' => '2.70',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '16',
            'name' => 'Pangsit Goreng (7st.)',
            'description' => '',
            'price' => '3.90',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '17',
            'name' => 'Pisang Goreng (5st.)',
            'description' => '',
            'price' => '3.40',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '18',
            'name' => 'Chinese Dim Sum',
            'description' => 'Mini loempia, kerry ko, pangsit goreng en garnalenpasteitje.',
            'price' => '5.40',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '19',
            'name' => 'Saté Babi (4st.)',
            'description' => '',
            'price' => '5.40',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '20',
            'name' => 'Saté Ajam (4st.)',
            'description' => '',
            'price' => '5.40',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '20',
            'number_addition' => 'A',
            'name' => 'Saté Garnalen (3st.)',
            'description' => '',
            'price' => '9.90',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '21',
            'name' => 'Fong Mei Ha (4st.)',
            'description' => 'Krokant gepaneerde garnalen.',
            'price' => '8.10',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '22',
            'name' => 'Patat',
            'description' => '',
            'price' => '2.30',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '23',
            'name' => 'Tsa Siu Mai (4st.)',
            'description' => 'Gebakken vleespasteitje.',
            'price' => '3.50',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '24',
            'name' => 'Atjar',
            'description' => '',
            'price' => '3.00',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '25',
            'name' => 'Witte Rijst',
            'description' => '',
            'price' => '3.00',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '26',
            'name' => 'Grote Pindasaus',
            'description' => '',
            'price' => '3.90',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '27',
            'name' => 'Kleine pindasaus',
            'description' => '',
            'price' => '2.30',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '28',
            'name' => 'Kippenpootje',
            'description' => '',
            'price' => '2.30',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '29',
            'name' => 'Halve Kip',
            'description' => '',
            'price' => '6.00',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '29',
            'number_addition' => 'H',
            'name' => 'Kroket',
            'description' => '',
            'price' => '1.40',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '29',
            'number_addition' => 'G',
            'name' => 'Frikandel',
            'description' => '',
            'price' => '1.40',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
        Dish::create([
            'number' => '180',
            'number_addition' => 'H',
            'name' => 'Kleine Sambal',
            'description' => '',
            'price' => '2.50',
            'category_id' => '2',
            'deliverable' => '1',
        ]);
    }
}
