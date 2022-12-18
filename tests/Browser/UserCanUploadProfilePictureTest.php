<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UserCanUploadProfilePictureTest extends DuskTestCase
{
    use DatabaseMigrations;

    /** @test */
    public function user_can_upload_profile_picture()
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->loginAs(1)
            ->visit('/profile')
            ->pause(2000)
            ->attach('#avatar', fake()->image)
            ->press('update')
            ->assertSee('Avatar set');
        });
    }
}
