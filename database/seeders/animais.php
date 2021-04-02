<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class animais extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animais')->insert(['id' => 1, 'nome' => 'Avestruz', 'codigo_animal' => '01']);
        DB::table('animais')->insert(['id' => 2, 'nome' => 'Águia', 'codigo_animal' => '02']);
        DB::table('animais')->insert(['id' => 3, 'nome' => 'Burro', 'codigo_animal' => '03']);
        DB::table('animais')->insert(['id' => 4, 'nome' => 'Borboleta', 'codigo_animal' => '04']);
        DB::table('animais')->insert(['id' => 5, 'nome' => 'Cachorro', 'codigo_animal' => '05']);
        DB::table('animais')->insert(['id' => 6, 'nome' => 'Cabra', 'codigo_animal' => '06']);
        DB::table('animais')->insert(['id' => 7, 'nome' => 'Carneiro', 'codigo_animal' => '07']);
        DB::table('animais')->insert(['id' => 8, 'nome' => 'Camelo', 'codigo_animal' => '08']);
        DB::table('animais')->insert(['id' => 9, 'nome' => 'Cobra', 'codigo_animal' => '09']);
        DB::table('animais')->insert(['id' => 10, 'nome' => 'Coelho', 'codigo_animal' => '10']);
        DB::table('animais')->insert(['id' => 11, 'nome' => 'Cavalo', 'codigo_animal' => '11']);
        DB::table('animais')->insert(['id' => 12, 'nome' => 'Elefante', 'codigo_animal' => '12']);
        DB::table('animais')->insert(['id' => 13, 'nome' => 'Galo', 'codigo_animal' => '13']);
        DB::table('animais')->insert(['id' => 14, 'nome' => 'Gato', 'codigo_animal' => '14']);
        DB::table('animais')->insert(['id' => 15, 'nome' => 'Jacaré', 'codigo_animal' => '15']);
        DB::table('animais')->insert(['id' => 16, 'nome' => 'Leão', 'codigo_animal' => '16']);
        DB::table('animais')->insert(['id' => 17, 'nome' => 'Macaco', 'codigo_animal' => '17']);
        DB::table('animais')->insert(['id' => 18, 'nome' => 'Porco', 'codigo_animal' => '18']);
        DB::table('animais')->insert(['id' => 19, 'nome' => 'Pavão', 'codigo_animal' => '19']);
        DB::table('animais')->insert(['id' => 20, 'nome' => 'Peru', 'codigo_animal' => '20']);
        DB::table('animais')->insert(['id' => 21, 'nome' => 'Touro', 'codigo_animal' => '21']);
        DB::table('animais')->insert(['id' => 22, 'nome' => 'Tigre', 'codigo_animal' => '22']);
        DB::table('animais')->insert(['id' => 23, 'nome' => 'Urso', 'codigo_animal' => '23']);
        DB::table('animais')->insert(['id' => 24, 'nome' => 'Veado', 'codigo_animal' => '24']);
        DB::table('animais')->insert(['id' => 25, 'nome' => 'Vaca', 'codigo_animal' => '25']);
    }
}
