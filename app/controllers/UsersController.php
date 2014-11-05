<?php

class UsersController extends BaseController {
    
    public function register() {
        return View::make('pages.register');
    }
    
    public function store(){
        var_dump('Si connecté, rediriger vers /login');
        Redirect::to('/login')->withMessage('Bravos, vous voilà enregistré !');
    }
}