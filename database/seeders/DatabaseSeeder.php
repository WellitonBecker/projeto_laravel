<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        $this->call(ProdutoTableSeeder::class);
    }
}

class ProdutoTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into produtos (descricao) values (?)', array('Jogo'));
        DB::insert('insert into produtos (descricao) values (?)', array('Tv'));
        DB::insert('insert into produtos (descricao) values (?)', array('Computador'));
        DB::insert('insert into produtos (descricao) values (?)', array('Celular'));
    }
}