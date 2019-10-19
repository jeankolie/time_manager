<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_personnel
 * @property int $id_departement
 * @property Departement $departement
 * @property Personnel $personnel
 */
class appartenir extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'appartenir';

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
    public function departement()
    {
        return $this->belongsTo('App\Models\Departement', 'id_departement', 'id_departement');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personnel()
    {
        return $this->belongsTo('App\Models\Personnel', 'id_personnel', 'id_personnel');
    }
}
