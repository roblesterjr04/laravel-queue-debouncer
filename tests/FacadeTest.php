<?php


namespace Mpbarlow\LaravelQueueDebouncer\Tests;


use Mpbarlow\LaravelQueueDebouncer\Debouncer;
use Mpbarlow\LaravelQueueDebouncer\Facade\Debouncer as Facade;

class FacadeTest extends TestCase
{
    /** @test */
    public function it_passes_calls_to_the_container()
    {
        $this->mock(Debouncer::class, function ($mock) {
            $mock
                ->shouldReceive('debounce')
                ->twice()
                ->with(null, null);
        });

        Facade::debounce(null, null);

        \Debouncer::debounce(null, null);
    }
}
