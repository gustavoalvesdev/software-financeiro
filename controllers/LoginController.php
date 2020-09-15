<?php 

class LoginController extends Controller {

    public function index() {

        $data = array();

        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $pass = addslashes($_POST['password']);

            $u = new User();

            if ($u->doLogin($email, $pass)) {
                header('Location: '.BASE_URL);
            } else {
                $data['error'] = 'E-mail e/ou senha inválido(s)!';
            }
        }

        $this->loadView('login', $data);

    }

}
