

<?php
// الربط بقاعدة البيانات
// الربط بقاعدة البيانات
$username = "root";
$password = "" ;
$database = new PDO("mysql:host=localhost; dbname=codershiyar;",$username,$password);

//بداية التسجيل

if(isset($_POST['register'])){
    $EMAIL = $_POST['EMAIL'];
    $acdisact = $_POST['acdisact'];

    $checkEmail = $database->prepare("SELECT * FROM users WHERE EMAIL =$EMAIL AND acdisact=1");



    $checkEmail->execute();

    if($checkEmail->rowCount()>0){
        echo '<div class="alert alert-danger" role="alert">
        هذا حساب سابقا مستخدم
      </div>';
    }else{
        $NAME =$_POST['NAME'] ;
        $EMAIL = $_POST['EMAIL'];
        $PASSWORD =$_POST['PASSWORD'] ;
        $ID_NATIONAL =$_POST['ID_NATIONAL'] ;
        $GENDER =$_POST['GENDER'] ;

        $acdisact =$_POST['acdisact'] ;

        $addUser = $database->prepare("INSERT INTO users(`NAME`,`PASSWORD`,`EMAIL`,`acdisact`,`ID_NATIONAL`,`GENDER`) VALUES ('$NAME','$PASSWORD','$EMAIL',1,'$ID_NATIONAL','$GENDER')");

    
            
     session_start();
     $var =$user->ID_USER ;
        // initialize session variables
        $_SESSION["user_id"] =  $var;
        session_start();

        header("Location:\codershiyar\Squadfree\LOGIN.HTML");
        $addUser->execute();
    
    }
}
?>
<?php
//نهاية التسجيل
//بداية مرحلة الدخوول للحساب

// الربط بقاعدة البيانات
$username = "root";
$password = "" ;
$database = new PDO("mysql:host=localhost; dbname=codershiyar;",$username,$password);

 if(isset($_POST['login'])){
    $login = $database->prepare("SELECT * FROM users WHERE EMAIL = :EMAIL AND PASSWORD = :PASSWORD AND acdisact=1" );
    $login->bindParam("EMAIL",$_POST['EMAIL']);
    $login->bindParam("PASSWORD",$_POST['PASSWORD']);
    $login->execute();
    if($login->rowCount()===1){
    $user = $login->fetchObject(); 
    
    
     session_start();
  $var =$user->ID_USER ;
     // initialize session variables
     $_SESSION["user_id"] =  $var;
     session_start();

    header("Location:\codershiyar\Squadfree\index1.php");
    ob_end_flush();
    echo '' ;
    }else{
     echo '
     <div class="alert alert-danger">
     كلمة مرور او بريد الكتروني غير صحيح 
     </div>
     ';   
    }
    }
    //نهاية مرحلة الدخول للحساب
    ?>
   //
<?php

//use thiagoalessio\TesseractOCR\TesseractOCR;
 
//require_once __DIR__.'/vendor/autoload.php';
 
//$ocr = new TesseractOCR('test.jpg');
//$text = $ocr->run();
 
//echo $text;
//
?>

<?php


//use thiagoalessio\TesseractOCR\TesseractOCR;
 
//require_once __DIR__.'/vendor/autoload.php';

//if(isset($_FILES['image'])){
  //  $file_name = $_FILES['image']['name'];
  //  $file_tmp =$_FILES['image']['tmp_name'];
  //  move_uploaded_file($file_tmp,"images/".$file_name);}
//$ocr = new TesseractOCR('"C:\xampp\htdocs\codershiyar\Squadfree\service\images'.$file_name.'" ');
//$text = $ocr->run();
 
//echo $text;

?>