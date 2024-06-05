<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginPsikologTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin')
                    ->type('email', 'sabitha@email.com')
                    ->type('password', 'sabitha123')
                    ->press('Login')
                    ->assertPathIs('/admin/dashboard');
        });
    }
}
