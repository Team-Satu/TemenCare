<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginAdminTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin')
                    ->type('email','admin@email.com')
                    ->type('password','adminLOGIN')
                    ->press('Login')
                    ->assertPathIs('/admin/dashboard');
        });
    }
}
