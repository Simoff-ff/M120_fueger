<?php
    class Controller{

<<<<<<< HEAD
=======
<<<<<<< Updated upstream
        public $hallo;
=======
        $testes
>>>>>>> Stashed changes
>>>>>>> ed9b6d6e7878e3bed0084ccddaa816e08e32aafc

        public function model($model) {
            require_once('../app/models/' . $model . '.php');
            return new $model();
        }

        public function view($view, $data = []) {
            require_once('../app/views/' . $view . '.php');
        }

<<<<<<< HEAD
=======
<<<<<<< Updated upstream
        public function witer()
        {
           $this->hallo = $_POST["vonWo"];
        }

        public function getHallo(){
            return $this->hallo;
        }
=======
>>>>>>> Stashed changes
>>>>>>> ed9b6d6e7878e3bed0084ccddaa816e08e32aafc
    }
?>