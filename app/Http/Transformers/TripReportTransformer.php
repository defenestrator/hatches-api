<?php namespace Hatches\Transformers;

class TripReportTransformer extends Transformer {

    /*
     * @param $user
     * @return array
     */
    public function transform($tripReport)
    {
        return [
            'author'            => $tripReport['user_id'],
            'fishery'           => $tripReport['fishery_id'],
            'trip_start_time'   => $tripReport['start_time'],
            'trip_end_time'     => $tripReport['end_time'],
            'title'             => $tripReport['title'],
            'body'              => $tripReport['report_body'],
            'last_edit'         => $tripReport['updated_at']
        ];
    }
}