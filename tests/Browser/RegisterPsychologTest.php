<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterPsychologTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $this->browse(function (Browser $browser) {
                $browser->visit('/admin')
                    ->type('email', 'admin@email.com')
                    ->type('password', 'adminLOGIN')
                    ->press('Login')
                    ->assertPathIs('/admin/dashboard')
                    ->click('.nav-link.collapsed[data-target="#collapsePsycholog"]')
                    ->pause(1000)
                    ->click('.collapse-item[href="http://127.0.0.1:8000/admin/create-psycholog"]')
                    ->type('full_name', 'Psikolog1')
                    ->type('email', 'psikolog1@email.com')
                    ->type('phone_number', '081234567855')
                    ->type('password', 'psikolog1')
                    ->press('Buat Akun');
            });
        });
    }
}
