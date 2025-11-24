<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RecommendationTest extends TestCase
{
    // use RefreshDatabase; // Be careful with this on existing DB, maybe just create a temp user if possible or mock auth.
    // Since I don't want to wipe the user's DB, I will try to find an existing user or just mock the auth middleware if possible, 
    // but actingAs is better. I'll try to make a user without saving if possible, or save and delete.
    // Safest is to use a transaction or just mock the guard.
    
    public function test_recommendation_returns_json_structure()
    {
        // Create user manually to avoid factory issues with missing columns
        $user = new User();
        $user->name = 'Test User';
        $user->username = 'testuser' . time();
        $user->email = 'test' . time() . '@example.com';
        $user->password = bcrypt('password');
        $user->is_farmer = true;
        $user->save();
        
        $response = $this->actingAs($user)
                         ->postJson('/dashboard-tani', [
                            'temperature' => 30,
                            'moisture' => 60
                        ]);

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'recommendations' => [
                '*' => [
                    'category',
                    'action',
                    'detail'
                ]
            ]
        ]);
        
        echo "\nResponse Content:\n" . $response->getContent() . "\n";
        
        // Cleanup
        $user->delete();
    }
}
