<?php
    // var_dump($_POST);
    foreach($_POST as $item) {
        if(isset($_POST['text'])){
            $name = $_POST['text'];
            echo $name;
        }
        if(isset($_POST['email'])){
            $email = $_POST['email'];
            echo $email;
        }
        if(isset($_POST['password'])){
            $password = $_POST['password'];
            echo $password;
        }
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
            echo $gender;
        }

        if(isset($_POST['language'])){
            $language = $_POST['language'];
            echo $language;
        }

        // echo $item . '<br>';
    }