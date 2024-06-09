<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SeeArticleTest extends DuskTestCase
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
                    ->clicklink('Artikel')
                    ->clickLink('Artikel Bunuh Diri');

        });
    }
}
