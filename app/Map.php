<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;

/**
 * Map
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property float $lat
 * @property float $lng
 * @property string $uri
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Map whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Map whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\Map whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\Map whereLat($value)
 * @method static \Illuminate\Database\Query\Builder|\Map whereLng($value)
 * @method static \Illuminate\Database\Query\Builder|\Map whereUri($value)
 * @method static \Illuminate\Database\Query\Builder|\Map whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Map whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 */
class Map extends Model {
	protected $fillable = ['title', 'description','lat','lng'];
}