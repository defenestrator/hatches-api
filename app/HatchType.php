<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;

/**
 * HatchType
 *
 * @property integer $id
 * @property string $type
 * @property string $description
 * @property-read \Illuminate\Database\Eloquent\Collection|\Prey[] $prey
 * @method static \Illuminate\Database\Query\Builder|\HatchType whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\HatchType whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\HatchType whereDescription($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 */
class HatchType extends Model {

    protected $fillable = [];

    public $timestamps = false;

    public function prey()
    {
        return $this->hasMany('Prey');
    }

    public function hatches()
    {
        return $this->belongTo('Hatch');
    }

}