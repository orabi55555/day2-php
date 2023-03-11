<?php
require_once('config.php');
require_once('functions.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $errorsArray = validate_form();
    if (!empty($errorsArray)) {
        foreach ($errorsArray as $error) {
            echo "<h2> $error</h2>";
        }
    } else {
        echo WELCOME_MESSAGE;
        print_data();
        save_to_file();
        convert_file_to_array();
    exit();
    }
}




$parameter = isset($_GET["page"]) ? $_GET["page"] : "";
if ($parameter === "users"){
    if(isset($_SESSION["Login"])){
     require_once("views/users.php");
    }
    else{
    echo "you don't have permission please login first";
    }
}

else
    {
        
            require_once("views/contactus.php");
      

     }
   ?>