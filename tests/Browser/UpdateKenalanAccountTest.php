<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UpdateKenalanAccountTest extends DuskTestCase
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
                    ->clicklink('Kenalan')
                    ->click('a[href="http://127.0.0.1:8000/kenalan/profile"]')
                    ->type('whatsapp_number', '085218867574')
                    ->press('Simpan & Mulai Kenalan');
        });
    }
}
