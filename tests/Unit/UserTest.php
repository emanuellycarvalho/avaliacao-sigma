<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    
    public function testCreateUser()
    {
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password123')
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com'
        ]);
    }

    public function testReadUser()
    {
        $user = User::factory()->create();

        $response = $this->get('/api/v1/users/' . $user->id);

        $response->assertStatus(200)
            ->assertJson([
                'name' => $user->name,
                'email' => $user->email
            ]);
    }

    public function testUpdateUser()
    {
        $user = User::factory()->create();

        $response = $this->put('/api/v1/users/' . $user->id, [
            'name' => 'Updated Name',
            'email' => 'updatedemail@example.com',
            'password' => Hash::make('updatedPassword')
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'name' => 'Updated Name',
            'email' => 'updatedemail@example.com',
        ]);
    }

    public function testDeleteUser()
    {
        $user = User::factory()->create();

        $response = $this->delete('/api/v1/users/' . $user->id);

        $response->assertStatus(200);

        $this->assertDatabaseMissing('users', [
            'id' => $user->id
        ]);
    }

    public function testPaginateUsers()
    {
        User::factory()->count(15)->create();

        $perPage = 10;
        $page = 1;

        $response = $this->get('/api/v1/users?page=' . $page . '&limit=' . $perPage);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'current_page',
                'data' => [
                    '*' => ['id', 'name', 'email']
                ],
                'first_page_url',
                'from',
                'last_page',
                'last_page_url',
                'next_page_url',
                'path',
                'per_page',
                'prev_page_url',
                'to',
                'total'
            ]);

        $responseData = $response->json();

        $this->assertEquals($page, $responseData['current_page']);
        $this->assertEquals($perPage, $responseData['per_page']);
        $this->assertEquals(15, $responseData['total']);

        $this->assertCount($perPage, $responseData['data']);
    }
}