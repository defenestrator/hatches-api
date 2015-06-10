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
 * @property string $role
 * @method static \Illuminate\Database\Query\Builder|\Hatches\Role whereRole($value)
 */
class Role extends Model
{
    public $timestamps = false;
    protected $fillable = [];

    public function user()
    {
        return $this->belongsToMany('User', 'role_user');
    }

}