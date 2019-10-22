<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_departement
 * @property string $nom
 * @property string $responsable
 * @property string $slug
 * @property Matiere[] $matieres
 * @property Enseigne[] $enseignes
 * @property Personnel[] $personnels
 * @property Licence[] $licences
 */
class Departement extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'departement';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_departement';

    /**
     * @var array
     */
    protected $fillable = ['nom', 'responsable', 'slug'];

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
    public function matieres()
    {
        return $this->belongsToMany('App\Models\Matiere', 'associer', 'id_departement', 'id_matiere');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enseignes()
    {
        return $this->hasMany('App\Models\Enseigne', 'id_departement', 'id_departement');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personnels()
    {
        return $this->hasMany('App\Models\Personnel', 'id_departement', 'id_departement');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function licences()
    {
        return $this->belongsToMany('App\Models\Licence', 'sender', 'id_departement', 'id_licence');
    }
}
