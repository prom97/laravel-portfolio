<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'mail@admin.com',
            'password' => Hash::make('admin123')
        ]);
        
        foreach(range(1,50) as $index) 
         {
            \App\Models\Project::factory()->create([
                'url' => 'proyecto-' . $index,
                'title' => 'Proyecto n° ' . $index
            ]);
         }
    }
}
