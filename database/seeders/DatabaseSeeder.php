<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
        // $this->call(ActionSeeder::class);
        $this->call(JobTitleSeeder::class);
        $this->call(TypeAuditSeeder::class);
        \App\Models\Action::factory(100)->create();
    }
}
