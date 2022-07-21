<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'Academica',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Administracion',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Extension',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'Rectoria',
        ]);
    }
}
