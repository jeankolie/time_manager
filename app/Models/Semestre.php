<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_semestre
 * @property int $id_licence
 * @property string $nom
 * @property Licence $licence
 * @property Enseigner[] $enseigners
 */
class Semestre extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'semestre';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_semestre';

    /**
     * @var array
     */
    protected $fillable = ['id_licence', 'nom'];

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
    public function licence()
    {
        return $this->belongsTo('App\Models\Licence', 'id_licence', 'id_licence');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enseigners()
    {
        return $this->hasMany('App\Models\Enseigner', 'id_semestre', 'id_semestre');
    }
}
