<?php 
	class NewClass extends OldClass{
        private $info='Yeah hello';
        private static $message='This is library';
        private $class_name=__CLASS__;
        /* 
        public function __construct(){

        } */
        public function setInfo($info){
            $this->info=$info;
        }

        public function getInfo(){
            return $this->info;
        }
        public static function returnMessage(){
            return self::$message;
        }
        /* 
        public function __destruct(){
            
        }         
        public function __toString(){
            return "Yeah hello";
        }
        public function getClassName(){
            return $class_name;
        } */
    }
?>