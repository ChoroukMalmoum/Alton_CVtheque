<?php

  if (isset($_POST['submit'])) {
    include_once'dbh.php';
    $first= mysqli_real_escape_string($conn,$_POST['first']);
    $last= mysqli_real_escape_string($conn,$_POST['last']);
    $email= mysqli_real_escape_string($conn,$_POST['email']);
    $telephone= mysqli_real_escape_string($conn,$_POST['telephone']);
    $motivation= mysqli_real_escape_string($conn,$_POST['motivation']);
    $cv=$_POST['cv'];
    $niv=$_POST['niv'];
    $exp=$_POST['exp'];

    if (empty($first)||empty($last)||empty($email)||empty($telephone)||empty($cv)||empty($motivation)||empty($niv)||empty($exp)){
      header("Location: ../index.php?candidature=empty");
    }
    else {
      if (!preg_match("/^[a-zA-Z]*$/",$first)|| !preg_match("/^[a-zA-Z]*$/",$last)) {
         header("Location: ../index.php?candidature=char");
         exit();
      }
      else {
        $sql="INSERT INTO cvtheque (first,last,email,telephone,motivation,cv,niv,exp) VALUES (?,?,?,?,?,?,?,?);";
        $stmt=mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            echo "SQL statment failed";
            }
        else {
            mysqli_stmt_bind_param($stmt,"ssssssbs",$first,$last,$email,$telephone,$niv,$exp,$cv,$motivation);
            mysqli_stmt_execute($stmt);//run code in sql
            header("Location: submited.php");
            exit();
        }

       }
     }
   }
