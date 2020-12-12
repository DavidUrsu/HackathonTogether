<?php
    include("../library/functions.php"); 
    global $urlRoot;
    session_start();
    $db = mysqli_connect('localhost', 'root', '', 'utilizatori-together');
    if(isset($_POST['btnSubmit']))
    {
        
        $txtEmail = $_POST['txtEmail'];
        $txtPass = $_POST['txtPass'];
        $query = "select * from utilizatori where email ='{$txtEmail}' and parola ='{$txtPass}'";
        $result = mysqli_query($db,$query);
        if($res = mysqli_fetch_array($result) )
        {
            $_SESSION["username"]=$res[1];
            $_SESSION["email"]=$res[2];
            $_SESSION["institutie"]=$res[6];
            $_SESSION["clasa"]=$res[4];
            $_SESSION["litera"]=$res[5];
            header("Location: http://$urlRoot/");
        }
        else{
            header("Location: http://$urlRoot/login/index.php");
        }
    }


?>