<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_annee
 * @property string $nom
 * @property Enseigner[] $enseigners
 * @property Inscrire[] $inscrires
 */
class Annee extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'annee';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_annee';

    /**
     * @var array
     */
    protected $fillable = ['nom'];

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
        return $this->hasMany('App\Models\Enseigner', 'id_annee', 'id_annee');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscrires()
    {
        return $this->hasMany('App\Models\Inscrire', 'id_annee', 'id_annee');
    }
}
