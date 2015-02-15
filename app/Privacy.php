<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;
/**
 * Privacy
 *
 * @property integer $id
 * @property string $privacy
 * @method static \Illuminate\Database\Query\Builder|\Privacy whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Privacy wherePrivacy($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 */

class Privacy extends Model {
//    @TODO: In production, guard this vs injection.
//    protected $guarded = ['*'];
    public $timestamps = false;
    protected $table = 'privacy';
    protected $fillable = [];

}