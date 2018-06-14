<?php 
/*The target of this experiment is to see if a variable that references another object can be treated as that object in itself*/
class Hello{
    public $attr='hi';

    public function setAttr($attr){
        $this->attr=$attr;
    }
}

$hello1=new Hello;
$hello2=$hello1;
$hello2->setAttr('!hi');
echo $hello1->attr;
