<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Hatches\Profile
 *
 * @property integer $id
 * @property string $gender
 * @property string $twitter
 * @property string $facebook
 * @property string $youtube
 * @property string $instagram
 * @property string $google
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \User $users
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 * @method static \Illuminate\Database\Query\Builder|\Hatches\Profile whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Hatches\Profile whereGender($value)
 * @method static \Illuminate\Database\Query\Builder|\Hatches\Profile whereTwitter($value)
 * @method static \Illuminate\Database\Query\Builder|\Hatches\Profile whereFacebook($value)
 * @method static \Illuminate\Database\Query\Builder|\Hatches\Profile whereYoutube($value)
 * @method static \Illuminate\Database\Query\Builder|\Hatches\Profile whereInstagram($value)
 * @method static \Illuminate\Database\Query\Builder|\Hatches\Profile whereGoogle($value)
 * @method static \Illuminate\Database\Query\Builder|\Hatches\Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Hatches\Profile whereUpdatedAt($value)
 */
class Profile extends Model
{
    protected $fillable = ['gender', 'facebook', 'google', 'youtube', 'instagram', 'twitter'];

    public function users()
    {
        return $this->belongsTo('User');
    }


}
