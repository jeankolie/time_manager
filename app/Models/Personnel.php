<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property int $id_personnel
 * @property int $id_departement
 * @property string $nom
 * @property string $login
 * @property string $password
 * @property Departement $departement
 */
class Personnel extends Authenticatable
{
    use Notifiable;
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
    protected $fillable = ['id_departement', 'nom', 'login', 'password'];

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
    public function departement()
    {
        return $this->belongsTo('App\Models\Departement', 'id_departement', 'id_departement');
    }
}
