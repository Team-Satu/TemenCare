<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateArticleTest extends DuskTestCase
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
            ->click('.collapse-item[href="http://127.0.0.1:8000/admin/create-article"]')
            ->attach('image','C:\Users\amali\OneDrive\Pictures\Screenshots\Screenshot (888).png')
            ->type('title','Artikel Bunuh Diri')
            ->select('category', 'Mental')
            ->type('url','https://search.app/enCraMxBUcUK8dhq7')
            ->press('Buat Artikel');
        });
    }
}
