<?php

namespace UiBuilder\UiBuilder\Tests;

use Orchestra\Testbench\TestCase;
use UiBuilder\UiBuilder\UiBuilderServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [UiBuilderServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
