<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testBasicTest(): void
    {
        $data = [10,20,30];
        $result = array_sum($data);
        $this->assertEquals(60, $result);

      
    }

    public function testTest(): void
    {   $data = 'Je suis petit';
        $this->assertTrue(str()->startsWith($data, 'Je'));
        $this->assertFalse(str()->startsWith($data, 'Tu'));
        $this->assertSame(str()->startsWith($data, 'Tu'), false);
        $this->assertStringStartsWith('Je', $data);
        $this->assertStringEndsWith('petit', $data);
    }

}
