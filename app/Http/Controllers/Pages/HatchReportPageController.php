<?php namespace Hatches\Http\Controllers;

use Hatches\HatchReport;
use Auth;
use Request;

class HatchReportPageController extends PagesController
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::getUser()->id;
            $hatchReports = HatchReport::all(['user_id', 'title']);
            return $this->htmlPageReponse()->with('hatchReports', $hatchReports->where('user_id', $user));
        }
    }

    public function show()
    {
        return view('user/profile');
    }

    public function create()
    {
        $data = [Request::capture()];
        return TripReport::create($data);
    }
}
