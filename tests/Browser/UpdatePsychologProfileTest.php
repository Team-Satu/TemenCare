<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UpdatePsychologProfileTest extends DuskTestCase
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
                    ->waitFor('#userDropdown')
                    ->click('#userDropdown')
                    ->waitFor('.dropdown-menu-right')
                    ->click('.dropdown-item[href="'.route('admin.show-edit-profile').'"]')
                    ->type('description','saya psikolog handal')
                    ->press('Ubah Profile Anda');
        });
    }
}
