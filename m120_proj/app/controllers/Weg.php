<?php
    class Weg extends Controller{


        public function __construct(){
            $name = 'Herr Test';
            $this->view('home/Weg', ['name' => $name]);

        }

        public function test(){
            $this->view('home/Weg');
        }


    }
