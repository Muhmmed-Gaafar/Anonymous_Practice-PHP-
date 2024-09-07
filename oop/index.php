<?php

    class  Student
    {

        public $ge = 25 ;
        protected  $a = 'go to';
        private  $p = 55 ;
        public function test (){
            echo $this->p;
        }

    }

    class School extends Student{

    }

$student = new Student();
$school = new School();

$school->test();

