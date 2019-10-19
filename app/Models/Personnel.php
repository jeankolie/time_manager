<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_personnel
 * @property string $nom
 * @property string $login
 * @property string $password
 * @property Departement[] $departements
 */
class Personnel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'personnel';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_personnel';

    /**
     * @var array
     */
    protected $fillable = ['nom', 'login', 'password'];

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
        return $this->belongsToMany('App\Models\Departement', 'appartenir', 'id_personnel', 'id_departement');
    }
}
