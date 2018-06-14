<?php 

session_start();

include 'OldClass.php';
include 'NewClass.php';

$object=new NewClass;
$object2=new NewClass;

if(isset($_POST['target'])){
    $target_number=$_POST['target'];

    if($target_number==1){
        isset($_POST['message']) ? $object->setInfo($_POST['message']) : true;
        $info=$object->getInfo();
        $_SESSION['object']=$info;    
    }
    else{
        isset($_POST['message']) ? $object2->setInfo($_POST['message']) : true;
        $info=$object2->getInfo();
        $_SESSION['object2']=$info;  
    }

}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="grid-container">
        <div class="yes-sir-container">
            <div class="yes-sir">
                <?php isset($_SESSION['object']) ? print $_SESSION['object'] : print $object->getInfo();?>
            </div>        
        </div>
        <div class="yes-sir-container2">
            <div class="yes-sir">
                <?php isset($_SESSION['object2']) ? print $_SESSION['object2'] : print $object2->getInfo();?>
            </div>        
        </div>
        <div class="yes-sir-container3">
            <div class="yes-sir">
                <?php echo NewClass::returnMessage();?>
            </div>        
        </div>
        <div class="message-setter">
            <form action="" method="POST" class="message-setter-form">
                <p class="message-setter-text">Set new message</p>
                <input class="message-setter-input" type="text" name="message"><br>
                <select name="target" class="message-setter-input">
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select><br>
                <input class="message-setter-submit" type="submit" value="Set">
            </form>            
        </div>
    </div>
         
</body>
</html>
