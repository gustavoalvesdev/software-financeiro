<?php 

class User extends Model {

    public function isLoggedIn() {

        return (isset($_SESSION['ccUser']) && !empty($_SESSION['ccUser']));

    }

}
