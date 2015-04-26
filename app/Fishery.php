<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;
/**
 * Fishery
 *
 * @property integer $id
 * @property string $name
 * @property string $regs
 * @property string $management
 * @property string $notes
 * @property float $lat
 * @property float $lng
 * @property integer $user_id
 * @property integer $privacy_id
 * @property integer $habitat_id
 * @property boolean $stillwater
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\FishSpecies[] $fishSpecies
 * @property-read \Illuminate\Database\Eloquent\Collection|\Hatch[] $hatches
 * @property-read \Illuminate\Database\Eloquent\Collection|\Comment[] $comments
 * @property-read \Illuminate\Database\Eloquent\Collection|\Tag[] $tags
 * @property-read \Illuminate\Database\Eloquent\Collection|\TripReport[] $tripReports
 * @property-read \Illuminate\Database\Eloquent\Collection|\HatchReport[] $hatchReports
 * @property-read \Privacy $privacy
 * @method static \Illuminate\Database\Query\Builder|\Fishery whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Fishery whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Fishery whereRegs($value)
 * @method static \Illuminate\Database\Query\Builder|\Fishery whereManagement($value)
 * @method static \Illuminate\Database\Query\Builder|\Fishery whereNotes($value)
 * @method static \Illuminate\Database\Query\Builder|\Fishery whereLat($value)
 * @method static \Illuminate\Database\Query\Builder|\Fishery whereLng($value)
 * @method static \Illuminate\Database\Query\Builder|\Fishery whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Fishery wherePrivacyId($value)
 * @method static \Illuminate\Database\Query\Builder|\Fishery whereHabitatId($value)
 * @method static \Illuminate\Database\Query\Builder|\Fishery whereStillwater($value)
 * @method static \Illuminate\Database\Query\Builder|\Fishery whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Fishery whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 */
class Fishery extends Model {
    protected $fillable = [
        'name', 'regs', 'management',
        'notes', 'lat', 'long', 'habitat',
        'stillwater', 'hatches'
    ];

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function fishSpecies()
    {
        return $this->belongsToMany('FishSpecies');
    }

    public function hatches()
    {
        return $this->hasMany('Hatch');
    }

    public function comments()
    {
        return $this->hasMany('Comment');
    }

    public function tags()
    {
        return $this->belongsToMany('Tag');
    }

    public function tripReports()
    {
        return $this->hasMany('TripReport');
    }

    public function hatchReports()
    {
        return $this->hasMany('HatchReport');
    }

    public function privacy()
    {
        return $this->hasOne('Privacy');
    }


}