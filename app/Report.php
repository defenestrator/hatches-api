<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;


/**
 * Hatches\Report
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany 
 */
class Report extends Model
{

    public function getAssets()
    {
        return $this->belongsToMany('Asset');
    }

    public function getTags()
    {
        return $this->belongsToMany('Tag');
    }

    public function getFishery()
    {
        return $this->hasOne('Fishery');
    }

    public function createReport()
    {
        $this->save();
    }
}