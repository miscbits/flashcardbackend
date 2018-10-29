<?php

namespace Tests\Unit;

use App\Services\FlashcardService;
use Tests\TestCase;
use Mockery;

class FlashcardTest extends TestCase
{

    protected $stub;
    protected $service;

    protected function setUp()
    {
        $this->stub = Mockery::mock(\App\Flashcard::class);
        $this->service = new FlashcardService($this->stub);
    }

    public function testFind()
    {
        $this->stub
            ->shouldReceive('active->find')
            ->once()->with(1)
            ->andReturn('Tested!');

        $this->assertEquals('Tested!', $this->service->find(1));
    }

    public function testAll() {
        $this->stub
            ->shouldReceive('active->all')
            ->once()
            ->andReturn('Tested!');

        $this->assertEquals('Tested!', $this->service->all());
    }

    public function testPaginate() {
        $this->stub
            ->shouldReceive('paginate')
            ->once()
            ->andReturn('Tested!');

        $this->assertEquals('Tested!', $this->service->paginate());
    }

    public function testStore() {
        $fields = ["fields" => "values"];
        $this->stub
            ->shouldReceive('create')
            ->once()->with($fields)
            ->andReturn('Tested!');

        $this->assertEquals('Tested!', $this->service->store($fields));
    }

    public function testUpdate() {
        $fields = ["fields" => "values"];
        $this->stub
            ->shouldReceive('where->update')
            ->once()->with($fields)
            ->andReturn('Tested!');

        $this->assertEquals('Tested!', $this->service->update(1, $fields));
    }

    public function testDestroy() {
        $this->stub
            ->shouldReceive('destroy')
            ->once()->with(1)
            ->andReturn('Tested!');

        $this->assertEquals('Tested!', $this->service->destroy(1));
    }
}
