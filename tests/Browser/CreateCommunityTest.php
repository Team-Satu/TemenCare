<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateCommunityTest extends DuskTestCase
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
            ->click('.nav-link.collapsed[data-target="#collapseCommunity"]')
            ->pause(1000)
            ->click('.collapse-item[href="http://127.0.0.1:8000/admin/create-community"]')
            ->type('name','Komuitas pecinta alam')
            ->type('short_description','untuk para pecinta alam')
            ->type('description','untuk para pecinta alam')
            ->attach('image','C:\Users\windy\OneDrive\Dokumen\VSCODE\TEMENCARE\TemenCare\public\images\1715829980.jpg')
            ->press('Buat Komunitas');
        });
    }
}
