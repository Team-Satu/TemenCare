<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteReportTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
            ->type('username', 'windykurniawan')
            ->type('password', 'Y99drasil!')
            ->press('Masuk')
            ->assertPathIs('/dashboard')
            ->clicklink('Lapor!')
            ->press('Laporan Kamu')
            ->pause(1000)
            ->click('.fa-trash-can');
        });
    }
}
