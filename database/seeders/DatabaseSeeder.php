<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call(CategoriaSeeder::class);
        $this->call(UnidadSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(MesaSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(SucursalSeeder::class);
        $this->call(CremaSeeder::class);
    }
}
