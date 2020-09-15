<?php 

class User extends Model {

    public function isLoggedIn() {

        return (isset($_SESSION['ccUser']) && !empty($_SESSION['ccUser']));

    }

    public function doLogin($email, $password) {

        $sql = $this->db->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
        $sql->bindValue(':email', $email);
        $sql->bindValue(':password', md5($password));

        $sql->execute();

        if ($sql->rowCount() > 0) {

            $row = $sql->fetch();

            $_SESSION['ccUser'] = $row['id'];

            return true;
        } 

        return false;

    }
}
