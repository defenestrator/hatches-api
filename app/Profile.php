<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{

    public function users()
    {
        return $this->belongsTo('User');
    }


}
