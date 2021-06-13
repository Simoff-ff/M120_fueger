<?php
    class Controller{

        public $hallo;

        public function model($model) {
            require_once('../app/models/' . $model . '.php');
            return new $model();
        }

        public function view($view, $data = []) {
            require_once('../app/views/' . $view . '.php');
        }

        public function witer()
        {
           $this->hallo = $_POST["vonWo"];
        }

        public function getHallo(){
            return $this->hallo;
        }
    }
?>