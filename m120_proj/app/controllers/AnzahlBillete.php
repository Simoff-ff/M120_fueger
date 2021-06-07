<?php
    class AnzahlBillete extends Controller{


        public function __construct(){
            $name = 'Herr Test';
            $this->view('home/anzahlBillete', ['name' => $name]);

        }

        public function test(){
            $this->view('home/anzahlBillete');
        }


    }
