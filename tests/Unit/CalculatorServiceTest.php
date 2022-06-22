<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CalculatorServiceTest extends TestCase
{
    /**
     * Testowanie CalculatorService
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_calculator_calculate()
    {
        $this->seed();
        $user = User::make([
            'name' => "Test",
            'email' => "test@wp.pl"
        ]);

        $response = $this->actingAs($user)->get('/calculator',[
            'construction' => 'Dach z dachówką',
            'rzędy' => '1',
            'panele' => '1',
        ]);

        $response->assertStatus(200);
    }
}
