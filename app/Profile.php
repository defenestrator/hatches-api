<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    protected $fillable = ['gender', 'facebook', 'google', 'youtube', 'instagram', 'twitter'];

    public function users()
    {
        return $this->belongsTo('User');
    }


}
