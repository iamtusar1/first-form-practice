<?php
    session_start();

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $number = $_POST["number"];

    $flag = false;

    if(!$name){
        $flag = true;
        $_SESSION["name_error"]="plese enter your name";
        
    }

    if(!$email){
        $flag = true;
        $_SESSION["email_error"]="plese enter your email";
        
    }else{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $flag = true;
            $_SESSION["email_error"]="(@) missing!";
            
        }
    }

    if(!$number){  
        $flag = true;
        $_SESSION["number_error"]="plese enter your number";  
    }elseif(strlen($number) < 11){
        $flag = true;
        $_SESSION["number_error"]="number is not valide(must be 11 charecters)";
    }

    if(!$password){
        $flag = true;
        $_SESSION["password_error"]="plese enter your password";
        
    }else{
        $upper = preg_match( '@[A-Z]@' , $password);
        $lower = preg_match( '@[a-z]@' , $password);
        $special = preg_match( '@[~,#,$,%,&,*,/,?,<,>,+,=,!]@' , $password );

        if(!$upper){
            $flag = true;
            $_SESSION["password_error"]="upperCase letter dao";
        }
        if(!$lower){
            $flag = true;
            $_SESSION["password_error"]="loweCase letter dao";
        }
        if(!$special){
            $flag = true;
            $_SESSION["password_error"]="special carrecter dao";
        }
        if(strlen($password) < 8){
            $flag = true;
            $_SESSION["password_error"]="minimume 8 numbers";
        }
    }

    if(!$gender){
        $flag = true;
        $_SESSION["gender_error"]="are you male or female?";
        
    }

    if($flag){
        header("location:index.php");
    }

    else{

        echo "<b>Name: </b>".$name."<br>";
        echo "<b>Email: </b>".$email."<br>";
        echo "<b>Number: </b>".$number."<br>";
        echo "<b>Password: </b>".$password."<br>";
        echo "<b>Gender: </b>".$gender."<br>"; 

    }

?>