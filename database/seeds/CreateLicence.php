<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CreateLicence extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('licence')->insert(
        	[
        	'nom' => 'Licence 1',
        	'slug' => Str::slug('Licence 1', '-')
    	]);

        DB::table('licence')->insert(
            [
            'nom' => 'Licence 2',
            'slug' => Str::slug('Licence 2', '-')
        ]);

        DB::table('licence')->insert(
            [
            'nom' => 'Licence 3',
            'slug' => Str::slug('Licence 3', '-')
        ]);

        DB::table('licence')->insert(
            [
            'nom' => 'Licence 4',
            'slug' => Str::slug('Licence 4', '-')
        ]);
    }
}
