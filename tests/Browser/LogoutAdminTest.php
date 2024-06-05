<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutAdminTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin')
                    ->type('email','windykurniawan@email.com')
                    ->type('password','windy123')
                    ->press('Login')
                    ->assertPathIs('/admin/dashboard')
                    ->waitFor('#userDropdown') 
                    ->click('#userDropdown') 
                    ->waitFor('.dropdown-menu-right') 
                    ->click('.dropdown-item[data-target="#logoutModal"]');
        });
    }
}
