<?php

namespace Tests\Browser\admin;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TestAdminLogin extends DuskTestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed');
    }

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testAdminLoginPageExists()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/login')
            ->waitForTextIn('.btn__inner', 'Connexion')
            ->type('email', 'theo.leonet@student.hepl.be')
            ->type('password', 'change_this')
            ->press('Connexion')
            ->assertSee('Dashboard');
        });
    }
}
