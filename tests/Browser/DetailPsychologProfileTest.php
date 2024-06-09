<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DetailPsychologProfileTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin')
                    ->waitFor('input[name="email"]', 10)  // Wait for the email input field to be available
                    ->type('email', 'sabitha@email.com')
                    ->waitFor('input[name="password"]', 10)  // Wait for the password input field to be available
                    ->type('password', 'sabitha123')
                    ->press('Login')
                    ->assertPathIs('/admin/dashboard')
                    ->waitFor('#userDropdown', 10)  // Wait for the user dropdown to be available
                    ->click('#userDropdown')
                    ->waitFor('.dropdown-menu-right', 10)  // Wait for the dropdown menu to be available
                    ->click('.dropdown-item[href="'.route('admin.show-edit-profile').'"]');
        });
    }
}
