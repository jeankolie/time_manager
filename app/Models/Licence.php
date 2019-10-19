<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_licence
 * @property string $nom_licence
 * @property string $slug
 * @property Enseigner[] $enseigners
 * @property Semestre[] $semestres
 * @property Departement[] $departements
 */
class Licence extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'licence';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_licence';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['nom_licence', 'slug'];

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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enseigners()
    {
        return $this->hasMany('App\Models\Enseigner', 'id_licence', 'id_licence');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function semestres()
    {
        return $this->hasMany('App\Models\Semestre', 'id_licence', 'id_licence');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function departements()
    {
        return $this->belongsToMany('App\Models\Departement', 'sender', 'id_licence', 'id_departemnt');
    }
}
