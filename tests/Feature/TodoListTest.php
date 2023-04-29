<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TodoListTest extends TestCase
{

    public function test_retrieveList(): void
    {


        $this->withoutExceptionHandling();
        $response = $this->getJson('todo-list');

        $this->assertEquals(1, count($response->json()));
    }
}
