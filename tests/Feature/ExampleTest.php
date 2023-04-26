<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    // public function test_the_application_returns_a_successful_response(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function test_get_api(){

        $response = $this->getJson('/api/v1/coustmers');
    }

    public function test_create_api(){
        $response = $this->postJson('/api/v1/coustmers');

        $response->assertJson([
            'name' => 'Tushar Gaur',
            'type' => 'I',
            'email'=> 'test123@test.com',
            'address'=> 'some Street'
        ]);
    }
    public function test_update_put_api(){
        $response = $this->putJson('/api/v1/coustmers/1');

        $response->assertJson([
            'name' => 'Tushar Gaur',
            'type' => 'I',
            'email'=> 'test123@test.com',
            'address'=> 'some Street'
        ]);
    }
    public function test_update_patch_api(){
        $response = $this->patchJson('/api/v1/coustmers/1');

        $response->assertJson([
            'name' => 'Tushar Gaur',
            'type' => 'I',

        ]);
    }

}
