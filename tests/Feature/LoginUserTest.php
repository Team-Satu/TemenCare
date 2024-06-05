<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginUserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('username', 'amalinalin')
                    ->type('password', '5tr@yKids')
                    ->press('Masuk')
                    ->assertPathIs('/dashboard');
        });

        $response->assertStatus(200);
    }
}
