<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_departemnt
 * @property string $nom_departement
 * @property string $responsable
 * @property string $slug
 * @property Matiere[] $matieres
 * @property Enseigner[] $enseigners
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
    protected $primaryKey = 'id_departemnt';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['nom_departement', 'responsable', 'slug'];

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
        return $this->belongsToMany('App\Models\Matiere', 'associer', 'id_departemnt', 'id_matiere');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enseigners()
    {
        return $this->hasMany('App\Models\Enseigner', 'id_departemnt', 'id_departemnt');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personnels()
    {
        return $this->hasMany('App\Models\Personnel', 'id_departemnt', 'id_departemnt');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function licences()
    {
        return $this->belongsToMany('App\Models\Licence', 'sender', 'id_departemnt', 'id_licence');
    }
}
