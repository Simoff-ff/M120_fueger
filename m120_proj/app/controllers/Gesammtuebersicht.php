<?php
    class Gesammtuebersicht extends Controller{


        public function __construct(){
            $name = 'Herr Test';
            $this->view('home/gesammtuebersicht', ['name' => $name]);

        }

        public function test(){
            $this->view('home/gesammtuebersicht');
        }


    }
