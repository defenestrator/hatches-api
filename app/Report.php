<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;


/**
 * Hatches\Report
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 * @property-read \User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\Asset[] $assets
 * @property-read \Illuminate\Database\Eloquent\Collection|\Tag[] $tags
 * @property-read \Fishery $fishery
 * @property-read \Illuminate\Database\Eloquent\Collection|\Comment[] $comments
 * @property-read \WaterData $waterData
 * @property-read \Weather $weather
 * @property-read \Privacy $privacy
 */
abstract class Report extends Model
{
    protected $fillable = [
        'asset',
        'user_id',
        'fishery_id',
        'start_time',
        'end_time',
        'title',
        'report_body',
        'privacy_id',
        'weather',
        'water_data'
    ];

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function assets()
    {
        return $this->belongsToMany('Asset');
    }

    public function tags()
    {
        return $this->belongsToMany('Tag');
    }

    public function fishery()
    {
        return $this->hasOne('Fishery');
    }

    public function comments()
    {
        return $this->hasMany('Comment');
    }

    public function waterData()
    {
        return $this->hasOne('WaterData');
    }

    public function weather()
    {
        return $this->hasOne('Weather');
    }

    public function privacy()
    {
        return $this->hasOne('Privacy');
    }

    public function createReport()
    {
        $this->save();
    }
}