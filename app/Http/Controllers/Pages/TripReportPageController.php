<?php namespace Hatches\Http\Controllers;

use Auth;
use Hatches\TripReport;
use Request;

class TripReportPageController extends PagesController
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::getUser()->id;
            $tripReports = TripReport::all(['id', 'user_id', 'title']);
            return view('pages.trip-reports')->with('tripReports', $tripReports->where('user_id', $user));
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
