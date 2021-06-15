<?php
    class Gueltigkeit extends Controller{


        public function __construct(){
            $name = 'Herr Test';
            $this->view('home/gueltigkeit', ['name' => $name]);

        }

        public function test(){
            $this->view('home/gueltigkeit');
        }


    }
