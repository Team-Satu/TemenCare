<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UpdateCommunityTest extends DuskTestCase
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
                    ->waitForLocation('/admin/dashboard', 30)
                    ->screenshot('after-login')
                    ->click('.nav-link.collapsed[data-target="#collapseCommunity"]')
                    ->pause(1000) 
                    ->screenshot('before-clicking-list-community') 
                    ->click('.collapse-item[href="http://127.0.0.1:8000/admin/list-community"]')
                    ->screenshot('after-clicking-list-community') 
                    ->click('.btn.btn-info') 
                    ->screenshot('final-state'); 
        });
        
    }
}
