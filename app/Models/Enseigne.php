<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_departement
 * @property int $id_annee
 * @property int $id_matiere
 * @property int $id_semestre
 * @property int $id_licence
 * @property string $professeur
 * @property string $jour
 * @property string $intervale
 * @property Annee $annee
 * @property Departement $departement
 * @property Licence $licence
 * @property Matiere $matiere
 * @property Semestre $semestre
 */
class Enseigne extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'enseigne';

    /**
     * @var array
     */
    protected $fillable = ['professeur', 'jour', 'intervale'];

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
    public function licence()
    {
        return $this->belongsTo('App\Models\Licence', 'id_licence', 'id_licence');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function matiere()
    {
        return $this->belongsTo('App\Models\Matiere', 'id_matiere', 'id_matiere');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function semestre()
    {
        return $this->belongsTo('App\Models\Semestre', 'id_semestre', 'id_semestre');
    }
}