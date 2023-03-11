<?php
require_once('config.php');
require_once('functions.php');


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $errorsArray = validate_form();
    if (!empty($errorsArray)) {
        foreach ($errorsArray as $error) {
            echo "<h2> $error</h2>";
        }
    } else {
        echo WELCOME_MESSAGE;
        save_to_file();
        convert_file_to_array();
    exit();
    }
}




$parameter = isset($_GET["page"]) ? $_GET["page"] : "";
if ($parameter === "contact")
{echo("first");
    require_once("views/contactus.php");}

else
    {echo("last");
        require_once("views/users.php");
        }
   ?>