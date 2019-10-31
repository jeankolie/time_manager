<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_salle
 * @property string $nom
 * @property string $slug
 * @property Enseigner[] $enseigners
 */
class Salle extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'salle';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_salle';

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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enseigners()
    {
        return $this->hasMany('App\Models\Enseigner', 'id_salle', 'id_salle');
    }
}
