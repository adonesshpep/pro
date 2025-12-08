<?php

namespace Database\Seeders;

use App\Models\Rule;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'test@example.com',
            'is_employee' => true,
            'password' => env('ADM_PAS'), // password
        ]);
        Rule::factory()->create([
            'type' => 'admin',
        ]);
        Rule::factory()->create([
            'type' => 'sales',
        ]);
        Rule::factory()->create([
            'type' => 'accounting',
        ]);
        Rule::factory()->create([
            'type' => 'inventory',
        ]);
        Rule::factory()->create([
            'type' => 'reporting',
        ]);
        DB::table('rule_user')->insert([
            'rule_id' => 1,
            'user_id' => 1,
        ]);
    }
}
