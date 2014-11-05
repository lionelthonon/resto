<?php

class UsersController extends BaseController {
    
    public function register()
    {
        return View::make('pages.register');
    }

    public function store()
    {
        return View::make('pages.home');
    }
}