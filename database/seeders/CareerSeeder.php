<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Career;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Career::create(['name' => 'Desarollo de software']);
        Career::create(['name' => 'Diseño grafico']);
        Career::create(['name' => 'Administracion industrial']);
        Career::create(['name' => 'Contabilidad']);
        Career::create(['name' => 'Desarrollo de aplicaciones web ']);
        Career::create(['name' => 'Administracion de empresas']);
        Career::create(['name' => 'Derecho']);
        Career::create(['name' => 'Ingenieria civil']);
        Career::create(['name' => 'Industrias alimentarias']);
        Career::create(['name' => 'Topografia']);
    }
}
