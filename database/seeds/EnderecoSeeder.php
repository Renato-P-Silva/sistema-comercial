<?php

use Illuminate\Database\Seeder;
use App\Endereco;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('enderecos')->insert([
            'cidade' => 'garanhuns',
            'logradouro' => 'andrei',
            'bairro' => 'boa vista',
            'estado' => 'PE',
            'numero' => 78,
            'cliente_id' => 1,
        ]);

        DB::table('enderecos')->insert([
            'cidade' => 'gravata',
            'logradouro' => 'andrei',
            'bairro' => 'boa vista',
            'estado' => 'PE',
            'numero' => 78,
            'cliente_id' => 2
        ]);

        DB::table('enderecos')->insert([
            'cidade' => 'garanhuns',
            'logradouro' => 'andrei',
            'bairro' => 'bela vista',
            'estado' => 'PE',
            'numero' => 78,
            'cliente_id' => 3
        ]);

        DB::table('enderecos')->insert([
            'cidade' => 'gravata',
            'logradouro' => 'andrei',
            'bairro' => 'bela vista',
            'estado' => 'PE',
            'numero' => 78,
            'cliente_id' => 4
        ]);

    }
}
