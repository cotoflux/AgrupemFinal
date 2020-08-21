<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Chrome;
use Tests\DuskTestCase;

class FixedFooterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testFixedFooter()
    {
        $code = "";
        $selector = "footer";
        $text = "fixed-bottom";

        $this->browse(function (Browser $browser) use ($code) {
            $browser->visit('/');
            $browser->resize(1920, 1080);
            $browser->visit('/post/1');
            $browser->assertSourceHas('fixed-bottom');
        });
    }
}
