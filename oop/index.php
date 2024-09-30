<?php

    class  Student
    {
        public $name = 'Muhammed' ;

        public function info ($name , $age ){
            return $age.$name ;
        }
    }
    $student = new Student();


