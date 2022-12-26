<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UserCanUploadProfilePictureTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
    }

    /** @test */
    public function user_can_upload_profile_picture()
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->loginAs($this->user)
            ->visit('/profile')
            ->waitFor('input[name=avatar]')
            ->attach('input[name=avatar]', '/Users/theoleonet/sites/web-artisan/public/images/design.png', 'image/png')
            ->script("console.log(document.getElementById('mon-joli-boutton').scrollIntoView(true));");

            $browser
            ->pause(1000)
            ->waitFor('#mon-joli-boutton')
            ->click('#mon-joli-boutton')
            ->assertPathIs('/profile')
            ->assertSee('web');
        });
    }
}
