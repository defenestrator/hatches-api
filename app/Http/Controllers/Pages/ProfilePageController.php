<?php namespace Hatches\Http\Controllers;

use Hatches\Profile;
use Hatches\User;
use Illuminate\Support\Facades\Auth;
use Request;

class ProfilePageController extends PagesController
{
    public function show()
    {
        return view('user/profile');
    }

    public function create()
    {
        $data = Request::capture();
        Request::flash();
        Profile::create([
            'gender' => $data['gender'],
            'facebook' => $data['facebook'],
            'google' => $data['google'],
            'instagram' => $data['instagram'],
            'twitter' => $data['twitter'],
            'youtube' => $data['youtube']
        ]);
        return view('user/profile');
    }
}
