<?php
    // var_dump($_POST);


        if(isset($_POST['text'])){
            $name = $_POST['text'];
            echo $name . "<br>";
        }
        if(isset($_POST['email'])){
            $email = $_POST['email'];
            echo $email . "<br>";
        }
        if(isset($_POST['password'])){
            $password = $_POST['password'];
            echo $password . "<br>";
        }
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
            echo $gender . "<br>";
        }

        if(isset($_POST['expert'])) {
            $expert = $_POST['expert'];
            foreach($expert as $field) {
                echo $field . '<br>';
            }
            
        }
        if(isset($_POST['expert'])) {
            echo "Interest in <br>";
            echo $_POST['interest']."<br>";
        }

        if(isset($_POST['language'])){
            $language = $_POST['language'];
            echo $language . "<br>";
        }

        // echo $item . '<br>';
    