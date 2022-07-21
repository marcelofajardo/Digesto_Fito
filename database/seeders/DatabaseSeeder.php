<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Documento;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(CategoriaSeeder::class);
        $this->call(TipoSeeder::class);
        Documento::factory()->count(260)->create();

    }
}
