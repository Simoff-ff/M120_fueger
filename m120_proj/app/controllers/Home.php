<?php
    class Home extends Controller{

        protected $controller = 'Klasse';

        public function index() {
            $name = 'Herr Test';
            $this->view('home/Startseite', ['name' => $name]);
        }

        public function weiter(){
         
        }
    }
