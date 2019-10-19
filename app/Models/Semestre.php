<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_semestre
 * @property string $nom
 * @property string $slug
 * @property Licence[] $licences
 * @property Enseigne[] $enseignes
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function licences()
    {
        return $this->belongsToMany('App\Models\Licence', 'comporte', 'id_semestre', 'id_licence');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enseignes()
    {
        return $this->hasMany('App\Models\Enseigne', 'id_semestre', 'id_semestre');
    }
}
