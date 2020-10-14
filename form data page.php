<?php

    if(isset($_POST['btn_send'])){
       $Name=$_POST['userName'];
      $Eamil= $_POST['userEmail'];
       $Subject=$_POST['userSubject'];
       $Msg=$_POST['userComment '];

        if(empty($Name) || empty($Eamil) || empty($Subject) || empty( $Msg)){
            header("location:main.php?error");
        }else{
            $to="mdalimkhan1326@gmail.com";
            if (mail($to,$Subject, $Msg, $Eamil)){
                header("location:form data page.php?success");
            }
        }
    }else{
        header("location:main.php");
    }

?>