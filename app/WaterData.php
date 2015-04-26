<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;

/**
 * WaterData
 *
 * @property integer $id
 * @property string $date
 * @property float $lat
 * @property float $lng
 * @property string $water_data
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\WaterData whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\WaterData whereDate($value)
 * @method static \Illuminate\Database\Query\Builder|\WaterData whereLat($value)
 * @method static \Illuminate\Database\Query\Builder|\WaterData whereLng($value)
 * @method static \Illuminate\Database\Query\Builder|\WaterData whereWaterData($value)
 * @method static \Illuminate\Database\Query\Builder|\WaterData whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\WaterData whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 * @property string $data
 * @method static \Illuminate\Database\Query\Builder|\Hatches\WaterData whereData($value)
 */
class WaterData extends Model {
    protected $fillable = ['date', 'lat', 'long', 'water_data'];
    protected $table = 'water_data';
}