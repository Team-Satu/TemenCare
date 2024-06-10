<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UpdatePsychologTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin')
            ->type('email','sabitha@email.com')
            ->type('password','sabitha123')
            ->press('Login')
            ->assertPathIs('/admin/dashboard')
            ->visit('/admin/profile')
            ->type('full_name', 'Update Nama Profile')
            ->attach('image', '/Users/rubyh/Documents/ic_launcher.png')
            ->click('.btn.btn-primary');
        });
    }
}
