<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateReportTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
            ->type('username', 'sabithaaulia')
            ->type('password', 'Bulans@b1t')
            ->press('Masuk')
            ->assertPathIs('/dashboard')
            ->clicklink('Lapor!')
            ->click('button[data-modal]')
            ->waitFor('.swal2-textarea')  // Wait for the SweetAlert textarea to be present
            ->type('.swal2-textarea', 'hello')
            ->press('Kirim')
            ->waitFor('.swal2-confirm');  // Wait for the confirmation button to appear
        });
    }
}