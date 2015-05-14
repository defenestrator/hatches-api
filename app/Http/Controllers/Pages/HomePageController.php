<?php namespace Hatches\Http\Controllers;

class HomePageController extends PagesController
{
    public function index()
    {
        return $this->htmlPageReponse();
    }
}