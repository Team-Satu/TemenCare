<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginUserTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group auth
     */
    public function testExample(): void
    {
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/')
        //             ->assertSee('Laravel');
        // });

        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('username', 'sabithaaulia')
                    ->type('password', 'Bulans@b1t')
                    ->press('Masuk')
                    ->assertPathIs('/dashboard');
        });

        // $response->assertStatus(200);
    }
}
