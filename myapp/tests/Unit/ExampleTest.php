<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->expectOutputString('Grupo 7!');
        print 'Grupo 7!';
    }

    /**
     * Test if array has one item.
     *
     * @return void
     */
    public function testCountArrayOfOneItem()
    {
        $this->assertCount(1, ['"I am the only one item"']);
    }
}
