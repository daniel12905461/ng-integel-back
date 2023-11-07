<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'user' => 'daniel',
            'password' => Hash::make('daniel'),
            'nombres' => 'daniel',
            'apellidos' => 'delgado camacho',
        ]);
        
        // $user = new User();
        // $user->nombres = 'Juan';
        // $user->apellidos = 'Fernandez';
        // $user->admin = '1';
        // $user->control = '0';
        // $user->email = 'admin@gmail.com';
        // $user->user = 'admin';
        // $user->email_verified_at = now();
        // $user->activo = true;
        // $user->password = Hash::make('admin');
        // $user->remember_token = Str::random(10);
        // $user->save();

        \App\Models\Zona::factory()->create([
            'nombre' => 'Otro'
        ]);
        \App\Models\Zona::factory()->create([
            'nombre' => 'Quillacollo'
        ]);
        \App\Models\Zona::factory()->create([
            'nombre' => 'Zofraco'
        ]);

        
        \App\Models\PlanInternet::factory()->create([
            'nombre' => 'Fibra10Mb/s',
            'precio' => '100'
        ]);
        \App\Models\PlanInternet::factory()->create([
            'nombre' => 'Mantenimiento',
            'precio' => '0'
        ]);
    }
}
