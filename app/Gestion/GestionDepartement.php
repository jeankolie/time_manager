<?php
/**
 * 
 */

namespace App\Gestion;

use App\Models\{Departement, Associer, Sender, Licence};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GestionDepartement
{
	public function create($data)
	{
		$dep = Departement::create([
			'nom' => $data->nom,
			'slug' => Str::slug($data->nom, '-'),
			'responsable' => $data->responsable
		]);

		$this->setMatiere($dep->id_departement, $data->matiere);
		$this->setLicence($data, $dep->id_departement);
	}

	public function update($data)
	{
		Departement::where('id_departement', '=', $data->id)->update([
			'nom' => $data->nom,
			'slug' => Str::slug($data->nom, '-'),
			'responsable' => $data->responsable
		]);

		$this->setMatiere($data->id, $data->matiere);
		$this->setLicence($data, $data->id);
	}

	public function setMatiere($departement, $matieres)
	{
		Associer::where('id_departement', $departement)->delete();
		foreach ($matieres as $matiere) {
			Associer::create([
				'id_departement' => $departement,
				'id_matiere' => $matiere
			]);
		}
	}

	public function setLicence($data, $departement)
	{

		Sender::where('id_departement', $departement)->delete();
		if ($data->licence == 3) {
			Sender::create([
				'id_departement' => $departement, 'id_licence' => Licence::whereNom('Licence 1')->first()->id_licence
			]);
			Sender::create([
				'id_departement' => $departement, 'id_licence' => Licence::whereNom('Licence 2')->first()->id_licence
			]);
			Sender::create([
				'id_departement' => $departement, 'id_licence' => Licence::whereNom('Licence 3')->first()->id_licence
			]);
		}elseif ($data->licence == 4) {
			Sender::create([
				'id_departement' => $departement, 'id_licence' => Licence::whereNom('Licence 1')->first()->id_licence
			]);
			Sender::create([
				'id_departement' => $departement, 'id_licence' => Licence::whereNom('Licence 2')->first()->id_licence
			]);
			Sender::create([
				'id_departement' => $departement, 'id_licence' => Licence::whereNom('Licence 3')->first()->id_licence
			]);
			Sender::create([
				'id_departement' => $departement, 'id_licence' => Licence::whereNom('Licence 4')->first()->id_licence
			]);
		}
	}
}