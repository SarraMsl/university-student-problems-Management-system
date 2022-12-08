
    <?php

    //بداية مرحلة الدخوول للحساب
    
    // الربط بقاعدة البيانات
    $username = "root";
    $password = "" ;
    $database = new PDO("mysql:host=localhost; dbname=codershiyar;",$username,$password);
    
     if(isset($_POST['login'])){
        $login = $database->prepare("SELECT * FROM addadmin WHERE Email_Department = :Email_Department AND Password = :Password " );
        $login->bindParam("Email_Department",$_POST['Email_Department']);
        $login->bindParam("Password",$_POST['Password']);
        $login->execute();
        if($login->rowCount()===1){
        $user = $login->fetchObject(); 
        
        
   
        session_start();
        $var =$user->id ;
           // initialize session variables
           $_SESSION["user_id"] =  $var;
           session_start();
    
        header("Location:\Nouveau dossier\material-dashboard-master\pages\dashboard.php");
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


