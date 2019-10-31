<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_etudiant
 * @property string $matricule
 * @property string $prenom
 * @property string $nom
 * @property string $password
 * @property Inscrire[] $inscrires
 */
class Etudiant extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'etudiant';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_etudiant';

    /**
     * @var array
     */
    protected $fillable = ['matricule', 'prenom', 'nom', 'password'];

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
    public function inscrires()
    {
        return $this->hasMany('App\Models\Inscrire', 'id_etudiant', 'id_etudiant');
    }
}
