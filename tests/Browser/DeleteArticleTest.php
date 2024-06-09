<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteArticleTest extends DuskTestCase
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
            ->click('.nav-link.collapsed[data-target="#collapseArticles"]')
            ->pause(1000)
            ->click('.collapse-item[href="http://127.0.0.1:8000/admin/articles"]')
            ->click('.btn.btn-danger');
        });
    }
}
