<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateSemestre extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semestre')->insert([
        	'nom' => 'Semestre 1',
        	'id_licence' => DB::table('licence')->whereNom('Licence 1')->first()->id_licence
        ]);

        DB::table('semestre')->insert([
        	'nom' => 'Semestre 2',
        	'id_licence' => DB::table('licence')->whereNom('Licence 1')->first()->id_licence
        ]);

        DB::table('semestre')->insert([
        	'nom' => 'Semestre 3',
        	'id_licence' => DB::table('licence')->whereNom('Licence 2')->first()->id_licence
        ]);

        DB::table('semestre')->insert([
        	'nom' => 'Semestre 4',
        	'id_licence' => DB::table('licence')->whereNom('Licence 2')->first()->id_licence
        ]);

        DB::table('semestre')->insert([
        	'nom' => 'Semestre 5',
        	'id_licence' => DB::table('licence')->whereNom('Licence 3')->first()->id_licence
        ]);

        DB::table('semestre')->insert([
        	'nom' => 'Semestre 6',
        	'id_licence' => DB::table('licence')->whereNom('Licence 3')->first()->id_licence
        ]);

        DB::table('semestre')->insert([
        	'nom' => 'Semestre 7',
        	'id_licence' => DB::table('licence')->whereNom('Licence 4')->first()->id_licence
        ]);

        DB::table('semestre')->insert([
        	'nom' => 'Semestre 8',
        	'id_licence' => DB::table('licence')->whereNom('Licence 4')->first()->id_licence
        ]);
    }
}
