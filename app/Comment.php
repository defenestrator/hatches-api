<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;

/**
 * Comment
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $comment
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \User $user
 * @method static \Illuminate\Database\Query\Builder|\Comment whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Comment whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Comment whereComment($value)
 * @method static \Illuminate\Database\Query\Builder|\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Comment whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany 
 */
class Comment extends Model {
    protected $fillable = [];

    public function user()
    {
        return $this->belongsTo('User');
    }

//    public function tripReport()
//    {
//        return $this->hasOne('TripReport');
//    }
//
//    public function HatchReport()
//    {
//        return $this->hasOne('HatchReport');
//    }
//
//    public function flyPattern()
//    {
//        return $this->hasOne('FlyPattern');
//    }
//
//    public function fishery()
//    {
//        return $this->hasOne('Fishery');
//    }

}
