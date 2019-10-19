<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_licence
 * @property int $id_departemnt
 * @property Licence $licence
 * @property Departement $departement
 */
class Sender extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sender';

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
    public function departement()
    {
        return $this->belongsTo('App\Models\Departement', 'id_departemnt', 'id_departemnt');
    }
}
