<?php
/**
 * Created by PhpStorm.
 * User: x
 * Date: 5/11/2014
 * Time: 15:29
 */

class AuthController extends BaseController{
    public function login() {
        /* --- Page du formulaire de login --- */
        return View::make(pages.login);
    }

    public function doLogin() {
        /* --- Connexion --- */

        /* --- Vérification de la connexion --- */
        return Redirect::intended('home');
    }
} 