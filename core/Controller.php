<?php 

class Controller {

    public function loadView($viewName, $viewData = array()) {
        extract($viewData);



        require_once 'views/'.$viewName.'.php';
    } 

    public function actionNotFound() {
        $this->loadView('not-found');
    }
}
