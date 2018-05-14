<?php

namespace Tests\Unit;

use App\Agent;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AgentTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAgentCreation()
    {
        $first = factory(Agent::class)->create();

        $agents = Agent::all()->toArray();

        $this->assertEquals(
            [
                [
                    'id' => $first->id,
                    'uuid' => $first->uuid,
                    'handle' => $first->handle,
                    'name' => $first->name,
                    'created_at' => $first->created_at,
                    'updated_at' => $first->updated_at,
                ],
            ],
            $agents
        );

        $this->assertCount(1, $agents);
    }
}
