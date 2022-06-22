<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DatabaseSeederTest extends TestCase
{
    /**
     * Testowanie działania seed'erów bazy danych
     *
     * @return void
     */

    use RefreshDatabase;

    public function test_databse_user_seeder()
    {
        $this->seed();
        $this->assertDatabaseHas('users',[
            'name' => 'admin',
            'email' => 'admin@wp.pl'
        ]);
    }

    public function test_databse_product_seeder()
    {
        $this->seed();
        $this->assertDatabaseHas('products',[
            'name'       => 'Profil 2150mm',
            'description' => 'Profil 2150mm',
            'amount' => '1000',
            'price' => '23.87',
            'image_path' => 'products/1.jfif',
        ]);
    }

    public function test_databse_product_categories_seeder()
    {
        $this->seed();
        $this->assertDatabaseHas('product_categories',[
            'name' => 'Dach z dachówką'
        ]);
    }

}
