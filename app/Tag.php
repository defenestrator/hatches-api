<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;

/**
 * Hatches\Tag
 *
 * @property integer $id
 * @property string $tag
 * @property-read \Illuminate\Database\Eloquent\Collection|\Asset[] $assets
 * @property-read \Illuminate\Database\Eloquent\Collection|\Flybox[] $flyboxes
 * @property-read \Illuminate\Database\Eloquent\Collection|\FlyPattern[] $flyPatterns
 * @property-read \Illuminate\Database\Eloquent\Collection|\Fishery[] $fisheries
 * @property-read \Illuminate\Database\Eloquent\Collection|\Hatch[] $hatches
 * @property-read \Illuminate\Database\Eloquent\Collection|\HatchReport[] $hatchReport
 * @property-read \Illuminate\Database\Eloquent\Collection|\HatchReport[] $TripReport
 * @method static \Illuminate\Database\Query\Builder|\Tag whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Tag whereTag($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 */
//use Eloquent;

class Tag extends Model
{

    protected $fillable = ['tag'];
    public $timestamps = false;

    public function assets()
    {
        return $this->belongsToMany('Asset');
    }

    public function flyboxes()
    {
        return $this->belongsToMany('Flybox');
    }

    public function flyPatterns()
    {
        return $this->belongsToMany('FlyPattern');
    }

    public function fisheries()
    {
        return $this->belongsToMany('Fishery');
    }

    public function hatches()
    {
        return $this->belongsToMany('Hatch');
    }

    public function hatchReport()
    {
        return $this->belongsToMany('HatchReport');
    }

    public function TripReport()
    {
        return $this->belongsToMany('HatchReport');
    }

}