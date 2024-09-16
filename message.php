<?php
    include('database.php');
    if (isset($_POST['sumbit'])) {
        echo "set";
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
         
         // validations before sumbiting
         if (empty($name) || empty($subject) || empty($message)) {
            echo " missing credentials, please fill all inputs";
         }else {
            $mysql = "INSERT INTO `message`(`name`, `email`, `subject`, `message`)VALUES('$name', '$email', '$subject', '$message')";
        
            $query = mysqli_query($connect, $mysql);
             if($query){
                echo "message sent successfully";
                header("index.php");

             }else {
                echo "message not sent";
             }        
         }

        
    }
?>