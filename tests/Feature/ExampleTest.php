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

    public function test_get_api():void{

        $response = $this->getJson('/api/v1/coustmers');
        $response->assertStatus(200);
    }

//     public function test_create_api(){
//         $response = $this->postJson('/api/v1/coustmers');

//         $response->assertJson([
//             "name" => "Tushar Gaur",
//             "type" => "I",
//             "email"=> "test123@test.com",
//             "address"=> "some Street"
//         ])
//         ->assertStatus(200);
//     }
//     public function test_update_put_api(){
//         $response = $this->putJson('/api/v1/coustmers/1');

//         $response
//         ->assertJson([
//             "name" => "Tushar Gaur",
//             "type" => "I",
//             "email"=> "test123@test.com",
//             "address"=> "some Street"
//         ])
//         ->assertStatus(200);
//     }
//     public function test_update_patch_api(){
//         $response = $this->patchJson('/api/v1/coustmers/1');

//         $response->assertJson([
//             "name" => "Tushar Gaur",
//             "type" => "I",

//         ])
//         ->assertStatus(200);
//     }

public function test_post_request_on_api():void{
        $response = $this->postJson('api/v1/coustmers',[
            "method"=> "POST",
            "name" => "tushar Gaur",
            "type" => "I",
            "email"=> "test1@test.com",
            "address" => "some street"
        ]);

        $response
            ->assertStatus(201);


    }

// public function test_post_request_on_api():void{
//     $response = $this->json('POST', 'api/v1/coustmers',[
//         "method" => "POST",
//         "name" => "tushar Gaur",
//         "type" => "I",
//         "email"=> "test1@test.com",
//         "address" => "some street"
//     ]);


// }
 public function test_put_request_on_api():void{
    $response = $this->putJson('api/v1/coustmers/1',[
        "method"=> "PUT",
        "name" => "tushar Gaur",
        "type" => "I",
        "email"=> "test1@test.com",
        "address" => "some street"
    ]);

    $response
        ->assertStatus(200);




 }
 public function test_patch_request_on_api():void{
      $response = $this->patchJson('api/v1/coustmers/10',[
        "method"=> "PATCH",
        "name" => "tushar Gaur",

    ]);

    $response
        ->assertStatus(200);

 }

 }
