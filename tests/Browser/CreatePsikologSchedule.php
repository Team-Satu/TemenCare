<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreatePsikologSchedule extends DuskTestCase
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
                    ->assertPathIs('/admin/dashboard')
                    ->click('.nav-link.collapsed[data-target="#collapseThree"]')
                    ->pause(1000)
                    ->click('.collapse-item[href="http://127.0.0.1:8000/admin/create-schedule"]')
                    ->pause(2000)
                    ->type('date', '2024-06-10')  // Set the date
                    ->type('start_hour', '21:21')  // Set the start hour
                    ->type('end_hour', '22:21')  // Set the end hour
                    ->select('location', 'Online')  // Select the type (online/onsite)
                    ->press('Simpan');
        });
    }
}
