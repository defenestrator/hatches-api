<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;

/**
 * Prey
 *
 * @property integer $id
 * @property string $common_name
 * @property string $genus
 * @property string $species
 * @property integer $hatch_type_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \HatchType $hatchType
 * @method static \Illuminate\Database\Query\Builder|\Prey whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Prey whereCommonName($value)
 * @method static \Illuminate\Database\Query\Builder|\Prey whereGenus($value)
 * @method static \Illuminate\Database\Query\Builder|\Prey whereSpecies($value)
 * @method static \Illuminate\Database\Query\Builder|\Prey whereHatchTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\Prey whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Prey whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany 
 */
class Prey extends Model {
	protected $fillable = ['common_name', 'genus','species'];
    protected $table = 'prey';

    public function hatchType()
    {
        return $this->hasOne('HatchType');
    }


}