<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutUserTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group auth
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('username', 'amalinalin')
                    ->type('password', '5tr@yKids')
                    ->press('Masuk')
                    ->assertPathIs('/dashboard')
                    ->visit('/profile')
                    ->press('Keluar');
        });
    }
}
