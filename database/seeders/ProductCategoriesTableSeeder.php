<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productCategories = [
            [
                'name'       => 'Dach z dachówką'
            ],
            [
                'name'       => 'Dach z blachodachówki'
            ],
            [
                'name'       => 'Dach z blachą trapezowa'
            ],
            [
                'name'       => 'Trójkąty z balastem'
            ],
            ];

               ProductCategory::insert($productCategories);
    }
}
