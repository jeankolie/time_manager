<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_annee
 * @property string $nom_annee
 * @property string $slug
 */
class Annee extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'annee';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_annee';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['nom_annee', 'slug'];

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

}
