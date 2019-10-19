<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_matiere
 * @property string $nom
 * @property string $slug
 * @property Departement[] $departements
 * @property Enseigne[] $enseignes
 */
class Matiere extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'matiere';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_matiere';

    /**
     * @var array
     */
    protected $fillable = ['nom', 'slug'];

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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function departements()
    {
        return $this->belongsToMany('App\Models\Departement', 'associer', 'id_matiere', 'id_departement');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enseignes()
    {
        return $this->hasMany('App\Models\Enseigne', 'id_matiere', 'id_matiere');
    }
}
