<?php
    class Klasse extends Controller{


        public function __construct(){
            $name = 'Herr Test';
            $this->view('home/klasse', ['name' => $name]);

        }

        public function test(){
            $this->view('home/klasse');
        }


    }
