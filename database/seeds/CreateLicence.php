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
        	'nom_licence' => 'Licence 1',
        	'slug' => Str::slug('Licence 1', '-')
        	],
        	[
        	'nom_licence' => 'Licence 2',
        	'slug' => Str::slug('Licence 2', '-')
        	],
        	[
        	'nom_licence' => 'Licence 3',
        	'slug' => Str::slug('Licence 3', '-')
        	],
        	[
        	'nom_licence' => 'Licence 4',
        	'slug' => Str::slug('Licence 4', '-')
        	]
    	);
    }
}
