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
                'image_path' => 'products/1.jfif',
            ],
            [
                'name'       => 'Śruba Dwugwintowa',
                'description' => 'Śruba Dwugwintowa',
                'amount' => '1000',
                'price' => '3.70',
                'image_path' => 'products/2.jpg',
            ],
            [
                'name'       => 'Klemy końcowe',
                'description' => 'Klemy końcowe',
                'amount' => '1000',
                'price' => '1.10',
                'image_path' => 'products/3.jfif',
            ],
            [
                'name'       => 'Klemy środkowe',
                'description' => 'Klemy środkowe',
                'amount' => '1000',
                'price' => '2.16',
                'image_path' => 'products/4.jfif',
            ],
            [
                'name'       => 'Haki regulowane podwójnie typu Vario',
                'description' => 'Haki regulowane podwójnie typu Vario',
                'amount' => '1000',
                'price' => '15.52',
                'image_path' => 'products/5.jpg',
            ],
            [
                'name'       => 'Zaślepki plastikowe',
                'description' => 'Zaślepki plastikowe',
                'amount' => '1000',
                'price' => '0.41',
                'image_path' => 'products/6.jpg',
            ],
            [
                'name'       => 'Hak regulowany typ S',
                'description' => 'Hak regulowany typ S',
                'amount' => '1000',
                'price' => '12.20',
                'image_path' => 'products/7.jfif',
            ],
            [
                'name'       => 'Śruba imbusowa M8',
                'description' => 'Śruba imbusowa M8',
                'amount' => '1000',
                'price' => '0.28',
                'image_path' => 'products/8.jpg',
            ],
            [
                'name'       => 'Nakrętka kwadratowa M8',
                'description' => 'Nakrętka kwadratowa M8',
                'amount' => '1000',
                'price' => '0.12',
                'image_path' => 'products/9.jfif',
            ],
            [
                'name'       => 'Wpust uniwersalny M8',
                'description' => 'Wpust uniwersalny M8',
                'amount' => '1000',
                'price' => '0.52',
                'image_path' => 'products/10.jpg',
            ],
            [
                'name'       => 'Adapter montażowy M10',
                'description' => 'Adapter montażowy M10',
                'amount' => '1000',
                'price' => '2.50',
                'image_path' => 'products/11.jpg',
            ],
            [
                'name'       => 'Śruba młotkowa M10',
                'description' => 'Śruba młotkowa M10',
                'amount' => '1000',
                'price' => '0.72',
                'image_path' => 'products/12.jfif',
            ],
            [
                'name'       => 'Łącznik do szyn',
                'description' => 'Łącznik do szyn',
                'amount' => '1000',
                'price' => '2.65',
                'image_path' => 'products/13.jfif',
            ],
            [
                'name'       => 'Nakrętka kołnierzowa ząbkowana M10',
                'description' => 'Nakrętka kołnierzowa ząbkowana M10',
                'amount' => '1000',
                'price' => '0.23',
                'image_path' => 'products/14.jpg',
            ],
            [
                'name'       => 'Mostek trapezowy 70/300',
                'description' => 'Mostek trapezowy 70/300',
                'amount' => '1000',
                'price' => '8.00',
                'image_path' => 'products/15.jfif',
            ],
            [
                'name'       => 'Blachowkręt',
                'description' => 'Blachowkręt',
                'amount' => '1000',
                'price' => '1',
                'image_path' => 'products/16.jfif',
            ],
            [
                'name'       => 'Wkręty ciesielskie z łbem talerzykowym',
                'description' => 'Wkręty ciesielskie z łbem talerzykowym',
                'amount' => '1000',
                'price' => '0.38',
                'image_path' => 'products/17.jfif',
            ],
            [
                'name'       => 'Trójkąt montażowy',
                'description' => 'Trójkąt montażowy',
                'amount' => '1000',
                'price' => '45',
                'image_path' => 'products/18.jfif',
            ],
            [
                'name'       => 'Bloczek balastowy 16kg',
                'description' => 'Bloczek balastowy 16kg',
                'amount' => '1000',
                'price' => '3',
                'image_path' => 'products/19.jpg',
            ],



            ];

                Product::insert($products);
    }
}
