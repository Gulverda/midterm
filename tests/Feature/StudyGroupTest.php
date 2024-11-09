<?php

// tests/Feature/StudyGroupTest.php
namespace Tests\Feature;

use Tests\TestCase;

class StudyGroupTest extends TestCase
{
    public function testUserCanJoinAndLeaveGroup()
    {
        $response = $this->postJson('/api/study-groups/1/join');
        $response->assertStatus(200);

        $response = $this->postJson('/api/study-groups/1/leave');
        $response->assertStatus(200);
    }

    public function testCanViewStudyGroupDetails()
    {
        $response = $this->getJson('/api/study-groups/1');
        $response->assertStatus(200);
    }
}
