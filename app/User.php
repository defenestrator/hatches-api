<?php namespace Hatches;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;




/**
 * Hatches\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Asset[] $assets
 * @property-read \Illuminate\Database\Eloquent\Collection|\TripReport[] $tripReports
 * @property-read \Illuminate\Database\Eloquent\Collection|\HatchReport[] $hatchReports
 * @property-read \Illuminate\Database\Eloquent\Collection|\FlyPattern[] $flyPatterns
 * @property-read \Illuminate\Database\Eloquent\Collection|\Flybox[] $flyboxes
 * @property-read \Illuminate\Database\Eloquent\Collection|\Fishery[] $fisheries
 * @property-read \Illuminate\Database\Eloquent\Collection|\Comment[] $comments
 * @property-read \Illuminate\Database\Eloquent\Collection|\Role[] $roles
 * @property-read \Illuminate\Database\Eloquent\Collection|\User[] $buddies
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 * @method static \Illuminate\Database\Query\Builder|\Hatches\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Hatches\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Hatches\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\Hatches\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\Hatches\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\Hatches\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Hatches\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Hatches\User whereUpdatedAt($value)
 */
class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword, SoftDeletes;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function assets()
	{
		return $this->hasMany('Asset');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function tripReports()
	{
		return $this->hasMany('TripReport');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function hatchReports()
	{
		return $this->hasMany('HatchReport');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function flyPatterns()
	{
		return $this->hasMany('FlyPattern');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function flyboxes()
	{
		return $this->hasMany('Flybox');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function fisheries()
	{
		return $this->hasMany('Fishery');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function comments()
	{
		return $this->hasMany('Comment');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function roles()
	{
		return $this->belongsToMany('Role');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function buddies()
	{
		return $this->belongsToMany('User');
	}

}
