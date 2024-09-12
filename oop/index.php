<?php

    class  Student
    {
        public $name = 'Muhmmed' ;
        protected  $age = 25;
        private  $salary = '10 $' ;

        public function test (){
            return $this->name . $this->age . $this->salary;
        }

    }
$student = new Student();


