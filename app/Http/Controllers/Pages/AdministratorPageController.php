<?php namespace Hatches\Http\Controllers;


class AdministratorPageController extends PagesController
{

    public function index()
    {
        return view('administration');
    }
}