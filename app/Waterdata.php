<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;

/**
 * Waterdata
 *
 * @property integer $id
 * @property string $date
 * @property float $lat
 * @property float $lng
 * @property string $water_data
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Waterdata whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Waterdata whereDate($value)
 * @method static \Illuminate\Database\Query\Builder|\Waterdata whereLat($value)
 * @method static \Illuminate\Database\Query\Builder|\Waterdata whereLng($value)
 * @method static \Illuminate\Database\Query\Builder|\Waterdata whereWaterData($value)
 * @method static \Illuminate\Database\Query\Builder|\Waterdata whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Waterdata whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 */
class Waterdata extends Model {
	protected $fillable = [];
    protected $table = 'waterdata';
}