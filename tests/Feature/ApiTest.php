<?php

namespace Tests\Feature;

use Faker\Guesser\Name;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     */
    public function test_get_api():void{

        $response = $this->getJson('/api/v1/coustmers');
        $response->assertStatus(200)
        ->assertValid('name', 'email')
        ->assertSuccessful()
        ->assertJsonCount($count=3, $key= null);
    }


public function test_post_request_on_api():void{
        $response = $this->postJson('api/v1/coustmers',[
            "method"=> "POST",
            "name" => $this->faker->name(),
            "type" => "I",
            "email"=> $this->faker->email(),
            "address" => "some street"
        ]);

        $response
            ->assertStatus(201)
            ->assertValid('name', 'email')
            ->assertSuccessful()
            ->dump();


    }




// }
 public function test_put_request_on_api():void{
    $response = $this->putJson('api/v1/coustmers/1',[
        "method"=> "PUT",
        "name" => $this->faker->name(),
        "type" => "I",
        "email"=> $this->faker->email(),
        "address" => "some street"
    ]);

    $response
        ->assertStatus(200)
        ->assertValid('name', 'email')
        ->assertSuccessful();




 }
 public function test_patch_request_on_api():void{
      $response = $this->patchJson('api/v1/coustmers/10',[
        "method"=> "PATCH",
        "name" => $this->faker->name(),

    ]);

    $response
        ->assertStatus(200)
        ->assertValid('name', 'email')
        ->assertSuccessful();

 }

 public function test_asserting_a_json_values():void{
    $response = $this->getJson('/api/v1/coustmers');
    $response
        ->assertJsonIsObject()
        ->assertValid('name', 'email')
        ->assertSuccessful();

}

}
