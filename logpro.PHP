

<?php

//بداية مرحلة الدخوول للحساب

// الربط بقاعدة البيانات
$username = "root";
$password = "" ;
$database = new PDO("mysql:host=localhost; dbname=coder;",$username,$password);

 if(isset($_POST['login'])){
    $login = $database->prepare("SELECT * FROM  enseignement WHERE EMAIL = :EMAIL AND PASSoWRD = :PASSWORD " );
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

    header("Location:\codershiyar\Squadfree\indexenseignement.php");
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
    ?><?php

    //بداية مرحلة الدخوول للحساب
    
    // الربط بقاعدة البيانات
    $username = "root";
    $password = "" ;
    $database = new PDO("mysql:host=localhost; dbname=coder;",$username,$password);
    
     if(isset($_POST['login1'])){
        $login = $database->prepare("SELECT * FROM adminn WHERE EMAIL1 = :EMAIL1 AND PASSWORD1 = :PASSWORD1 " );
        $login->bindParam("EMAIL1",$_POST['EMAIL1']);
        $login->bindParam("PASSWORD1",$_POST['PASSWORD1']);
        $login->execute();
        if($login->rowCount()===1){
        $user = $login->fetchObject(); 
        
        
     //    session_start();
     //// $var =$user->ID_USER ;
         // initialize session variables
       //  $_SESSION["user_id"] =  $var;
       //  session_start();
    
        header("Location:/codershiyar/Squadfree/material-dashboard-master/index.html");
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