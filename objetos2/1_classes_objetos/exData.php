<?php

    class Data{

        public $dia =1;
        public $mes =1;
        public $ano = 1970;

        public function apresentar(){
            echo"{$this->dia}/{$this->mes}/{$this->ano}\n";
        }

    }

    $aniver = new Data;
    $aniver->dia = 23;
    $aniver->mes = 2;
    $aniver->ano = 2025;
    echo $aniver->apresentar(), "\n";

    $aniver2 = new Data;
    $aniver2->dia = 1;
    $aniver2->mes = 4;
    $aniver2->ano = 2025;
    echo $aniver2->apresentar(), "\n";