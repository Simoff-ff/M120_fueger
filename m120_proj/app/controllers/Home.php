<?php
    class Home extends Controller{

        protected $controller = 'Klasse';

        public function index() {
            $name = 'Herr Test';
            $this->view('home/Startseite', ['name' => $name]);
        }

        public function weiter(){
            $speichern = $_GET["speichern"];
            if($speichern == 1){
                require_once ('../app/controllers/'.$this->controller.'.php');
                $this->controller = new $this->controller;
            }
        }

    }
