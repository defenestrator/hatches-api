<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;

/**
 * Flybox
 *
 * @property integer $id
 * @property string $flybox_name
 * @property string $description
 * @property integer $user_id
 * @property integer $privacy_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\FlyPattern[] $flyPatterns
 * @property-read \Illuminate\Database\Eloquent\Collection|\Comment[] $comments
 * @property-read \Privacy $privacy
 * @method static \Illuminate\Database\Query\Builder|\Flybox whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Flybox whereFlyboxName($value)
 * @method static \Illuminate\Database\Query\Builder|\Flybox whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\Flybox whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Flybox wherePrivacyId($value)
 * @method static \Illuminate\Database\Query\Builder|\Flybox whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Flybox whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 */

class Flybox extends Model {
	protected $fillable = ['flybox_name', 'description', 'privacy'];

    public function user()
    {
        // A flybox belongs to a single user.
        return $this->belongsTo('User');
    }

    public function flyPatterns()
    {
        return $this->hasMany('FlyPattern');
    }

    public function comments()
    {
        return $this->hasMany('Comment', 'comment_user');
    }

    public function privacy()
    {
        return $this->hasOne('Privacy');
    }
}