<?php namespace Hatches;

use Illuminate\Database\Eloquent\Model;

/**
 * HatchReport
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $fishery_id
 * @property string $start_time
 * @property string $end_time
 * @property string $title
 * @property string $report_body
 * @property integer $hatch_intensity
 * @property integer $privacy_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\Tag[] $tags
 * @property-read \Illuminate\Database\Eloquent\Collection|\Comment[] $comments
 * @property-read \Privacy $privacy
 * @method static \Illuminate\Database\Query\Builder|\HatchReport whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\HatchReport whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\HatchReport whereFisheryId($value)
 * @method static \Illuminate\Database\Query\Builder|\HatchReport whereStartTime($value)
 * @method static \Illuminate\Database\Query\Builder|\HatchReport whereEndTime($value)
 * @method static \Illuminate\Database\Query\Builder|\HatchReport whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\HatchReport whereReportBody($value)
 * @method static \Illuminate\Database\Query\Builder|\HatchReport whereHatchIntensity($value)
 * @method static \Illuminate\Database\Query\Builder|\HatchReport wherePrivacyId($value)
 * @method static \Illuminate\Database\Query\Builder|\HatchReport whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\HatchReport whereUpdatedAt($value)
 * @property integer $hatch_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\$related[] $morphedByMany
 * @method static \Illuminate\Database\Query\Builder|\Hatches\HatchReport whereHatchId($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Asset[] $assets
 * @property-read \Fishery $fishery
 * @property-read \WaterData $waterData
 * @property-read \Weather $weather
 */
class HatchReport extends Report
{
    protected $fillable = ['hatch_type', 'hatch_intensity'];

    public function createReport()
    {
        $this->save();
    }

    public function index($id)
    {
        $this->whereUserId($id);
    }
}