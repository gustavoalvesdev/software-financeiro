<?php

class HomeController extends Controller {

    public function __construct() {

        $user = new User();

        if ($user->isLoggedIn() == false) {
            header('Location: ' . BASE_URL .'login');
        }

    }

    public function index() {
        $this->loadView('home');
    }

}
