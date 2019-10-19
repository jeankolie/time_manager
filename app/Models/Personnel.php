<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_personnel
 * @property int $id_departemnt
 * @property string $nom_personnel
 * @property string $login
 * @property string $password
 * @property string $slug
 * @property Departement $departement
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
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['id_departemnt', 'nom_personnel', 'login', 'password', 'slug'];

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
        return $this->belongsTo('App\Models\Departement', 'id_departemnt', 'id_departemnt');
    }
}
