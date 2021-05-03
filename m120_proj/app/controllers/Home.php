<?php
    class Home extends Controller{


        public function index() {
            $name = 'Herr Test';
            $this->view('home/Startseite', ['name' => $name]);

        }

    }
