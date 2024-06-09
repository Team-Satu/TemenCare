<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreatePsychologProfileTest extends DuskTestCase
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
                    ->click('.nav-link[data-target="#collapseProfile"]')
                    ->pause(1000)
                    ->click('.collapse-item[href="http://127.0.0.1:8000/admin/create-profile"]')
                    ->select('type','Building')
                    ->type('title','Blitar Tempat Goya')
                    ->press('Tambah Profile');
        });
    }
}
