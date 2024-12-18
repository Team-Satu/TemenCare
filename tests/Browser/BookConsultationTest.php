<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BookConsultationTest extends DuskTestCase
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
            ->click('a[href="http://127.0.0.1:8000/psycholog/8"]')
            ->press('Jadwal')
            ->press('schedule')
            ->type('.swal2-textarea', 'saya mengalami kecemasan')
            ->press('Kirim');
        });
    }
}
