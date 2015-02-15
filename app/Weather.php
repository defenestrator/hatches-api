<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;

/**
 * Weather
 *
 * @property integer $id
 * @property string $date
 * @property float $lat
 * @property float $lng
 * @property string $weather_data
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Weather whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Weather whereDate($value)
 * @method static \Illuminate\Database\Query\Builder|\Weather whereLat($value)
 * @method static \Illuminate\Database\Query\Builder|\Weather whereLng($value)
 * @method static \Illuminate\Database\Query\Builder|\Weather whereWeatherData($value)
 * @method static \Illuminate\Database\Query\Builder|\Weather whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Weather whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 */
class Weather extends Model {
	protected $fillable = ['date', 'lat', 'lng', 'weather_data'];
    protected $table = 'weather';
}