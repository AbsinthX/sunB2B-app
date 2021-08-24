<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name'       => 'Profil 2150mm',
                'description' => 'Profil 2150mm',
                'amount' => '1000',
                'price' => '23.87',
            ],
            [
                'name'       => 'Śruba Dwugwintowa',
                'description' => 'Śruba Dwugwintowa',
                'amount' => '1000',
                'price' => '3.70',
            ],
            [
                'name'       => 'Klemy końcowe',
                'description' => 'Klemy końcowe',
                'amount' => '1000',
                'price' => '1.10',
            ],
            [
                'name'       => 'Klemy środkowe',
                'description' => 'Klemy środkowe',
                'amount' => '1000',
                'price' => '2.16',
            ],
            [
                'name'       => 'Haki regulowane podwójnie typu Vario',
                'description' => 'Haki regulowane podwójnie typu Vario',
                'amount' => '1000',
                'price' => '15.52',
            ],
            [
                'name'       => 'Zaślepki plastikowe',
                'description' => 'Zaślepki plastikowe',
                'amount' => '1000',
                'price' => '0.41',
            ],
            [
                'name'       => 'Hak regulowany typ S',
                'description' => 'Hak regulowany typ S',
                'amount' => '1000',
                'price' => '12.20',
            ],
            [
                'name'       => 'Śruba imbusowa M8',
                'description' => 'Śruba imbusowa M8',
                'amount' => '1000',
                'price' => '0.28',
            ],
            [
                'name'       => 'Nakrętka kwadratowa M8',
                'description' => 'Nakrętka kwadratowa M8',
                'amount' => '1000',
                'price' => '0.12',
            ],
            [
                'name'       => 'Wpust uniwersalny M8',
                'description' => 'Wpust uniwersalny M8',
                'amount' => '1000',
                'price' => '0.52',
            ],
            [
                'name'       => 'Adapter montażowy M10',
                'description' => 'Adapter montażowy M10',
                'amount' => '1000',
                'price' => '2.50',
            ],
            [
                'name'       => 'Śruba młotkowa M10',
                'description' => 'Śruba młotkowa M10',
                'amount' => '1000',
                'price' => '0.72',
            ],
            [
                'name'       => 'Łącznik do szyn',
                'description' => 'Łącznik do szyn',
                'amount' => '1000',
                'price' => '2.65',
            ],
            [
                'name'       => 'Nakrętka kołnierzowa ząbkowana M10',
                'description' => 'Nakrętka kołnierzowa ząbkowana M10',
                'amount' => '1000',
                'price' => '0.23',
            ],
            [
                'name'       => 'Mostek trapezowy 70/300',
                'description' => 'Mostek trapezowy 70/300',
                'amount' => '1000',
                'price' => '8.00',
            ],
            [
                'name'       => 'Blachowkręt',
                'description' => 'Blachowkręt',
                'amount' => '1000',
                'price' => '1',
            ],
            [
                'name'       => 'Wkręty ciesielskie z łbem talerzykowym',
                'description' => 'Wkręty ciesielskie z łbem talerzykowym',
                'amount' => '1000',
                'price' => '0.38',
            ],
            [
                'name'       => 'Trójkąt montażowy',
                'description' => 'Trójkąt montażowy',
                'amount' => '1000',
                'price' => '36',
            ],
            
            
            
            ];
                
                Product::insert($products);
    }
}
