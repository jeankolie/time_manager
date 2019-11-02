<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_etudiant
 * @property int $id_departement
 * @property int $id_annee
 * @property int $id_licence
 * @property string $date_inscription
 * @property Annee $annee
 * @property Departement $departement
 * @property Etudiant $etudiant
 * @property Licence $licence
 */
class Inscrire extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'inscrire';

    /**
     * @var array
     */
    protected $fillable = ['id_etudiant', 'id_departement', 'id_annee', 'id_licence', 'date_inscription'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * The storage format of the model's date columns.
     * 
     * @var string
     */
    protected $dateFormat = 'U';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function annee()
    {
        return $this->belongsTo('App\Models\Annee', 'id_annee', 'id_annee');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function departement()
    {
        return $this->belongsTo('App\Models\Departement', 'id_departement', 'id_departement');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function etudiant()
    {
        return $this->belongsTo('App\Models\Etudiant', 'id_etudiant', 'id_etudiant');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function licence()
    {
        return $this->belongsTo('App\Models\Licence', 'id_licence', 'id_licence');
    }
}
