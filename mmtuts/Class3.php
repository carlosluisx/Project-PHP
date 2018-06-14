<?php 
    class Dogg0 {
        private $name;
        private $age;
        private $weight;
        private $color;
        private $picture;

        public function __construct($name,$age,$weight,$color, $picture){
            $this->$name=$name;
            $this->$age=$age;
            $this->$weight=$weight;
            $this->$color=$color;
            $this->$picture=$picture;
        }

        public function setName($name){
            $this->$name=$name;
        }
        public function setAge($age){
            $this->$age=$age;
        }
        public function setWeight($weight){
            $this->$weight=$weight;
        }
        public function setColor($color){
            $this->$color=$color;
        }
        public function setPicture($picture){
            $this->$picture=$picture;
        }
        public function getName($name){
            return $this->$name;
        }
        public function getAge($age){
            return $this->$age;
        }
        public function getWeight($weight){
            return $this->$weight;
        }
        public function getColor($color){
            return $this->$color;       
        }
        public function getPicture($picture){
            return $this->$picture;        
        }
    }