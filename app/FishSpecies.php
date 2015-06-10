<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;

/**
 * FishSpecies
 *
 * @property integer $id
 * @property string $common_name
 * @property string $genus
 * @property string $species
 * @property string $description
 * @property integer $habitat_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Habitat $habitat
 * @property-read \Illuminate\Database\Eloquent\Collection|\Fishery[] $fisheries
 * @method static \Illuminate\Database\Query\Builder|\FishSpecies whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\FishSpecies whereCommonName($value)
 * @method static \Illuminate\Database\Query\Builder|\FishSpecies whereGenus($value)
 * @method static \Illuminate\Database\Query\Builder|\FishSpecies whereSpecies($value)
 * @method static \Illuminate\Database\Query\Builder|\FishSpecies whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\FishSpecies whereHabitatId($value)
 * @method static \Illuminate\Database\Query\Builder|\FishSpecies whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\FishSpecies whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 */
class FishSpecies extends Model
{
    protected $fillable = ['common_name', 'genus', 'species', 'description'];

    public function habitat()
    {
        return $this->hasOne('Habitat');
    }

    public function fisheries()
    {
        return $this->belongsToMany('Fishery');
    }

}
