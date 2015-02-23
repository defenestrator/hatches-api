<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;

/**
 * Role
 *
 * @property integer $id
 * @property string $roles
 * @property-read \Illuminate\Database\Eloquent\Collection|\User[] $user
 * @method static \Illuminate\Database\Query\Builder|\Role whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Role whereRoles($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 */
class Role extends Model {
    public $timestamps = false;
    protected $fillable = ['role'];

    public function user()
    {
        return $this->belongsToMany('User');
    }

}