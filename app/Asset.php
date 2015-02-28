<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;

/**
 * Asset
 *
 * @property integer $id
 * @property string $type
 * @property integer $user_id
 * @property integer $privacy_id
 * @property string $uri
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \User $user
 * @property-read \Privacy $privacy
 * @property-read \Illuminate\Database\Eloquent\Collection|\Tag[] $tags
 * @property-read \Illuminate\Database\Eloquent\Collection|\Comment[] $comments
 * @method static \Illuminate\Database\Query\Builder|\Asset whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Asset whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\Asset whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Asset wherePrivacyId($value)
 * @method static \Illuminate\Database\Query\Builder|\Asset whereUri($value)
 * @method static \Illuminate\Database\Query\Builder|\Asset whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Asset whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 */


Class Asset extends Model {
    protected $fillable = ['user','privacy', 'tags', 'comments'];

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function privacy()
    {
        return $this->hasOne('Privacy');
    }

    public function tags()
    {
        return $this->belongsToMany('Tag');

    }

    public function comments()
    {
        return $this->hasMany('Comment');
    }

}