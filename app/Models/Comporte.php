<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_semestre
 * @property int $id_licence
 * @property Licence $licence
 * @property Semestre $semestre
 */
class Comporte extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'comporte';

    /**
     * @var array
     */
    protected $fillable = [];

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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function semestre()
    {
        return $this->belongsTo('App\Models\Semestre', 'id_semestre', 'id_semestre');
    }
}
