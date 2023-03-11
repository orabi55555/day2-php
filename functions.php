<?php

function validate_form()
{
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $message = isset($_POST['message']) ? $_POST['message'] : "";

    $errorsArray = [];

    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            array_push($errorsArray, "$key can't be empty");
        }
    }
    if (!empty($_POST['name']) && strlen($name) > MAX_NAME) {
        array_push($errorsArray, " Name must be less than " . MAX_NAME);
    }
    if (!empty($_POST['message']) && strlen($message) > MAX_MESSAGE) {
        array_push($errorsArray, "Message  must be less than " . MAX_MESSAGE);
    }
    if (!empty($_POST['email']) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errorsArray, "Email is in correct");
    }
    return $errorsArray;
}
function save_to_file(){
    $fb=fopen(__Saving_File_,"a+");
    $date = date("F j Y g:i a");
    $ip = $_SERVER['REMOTE_ADDR'];
    $email = $_POST["email"];
    $name = $_POST["name"];
    fwrite($fb, "$date,$ip,$email,$name" . PHP_EOL);
    exit();
  }
  function convert_file_to_array() {
    return file(__Saving_File_);
}
function print_data()
{
    echo "<h3> Your Data is : <h3>";
    foreach ($_POST as $key => $value) {
        if ($key != "submit") {
            echo " your $key  is => $value ";
            echo "<br>";
        }
    }
}

function remember_variable($var)
{
    if (isset($_POST[$var]) && !empty($_POST[$var])) {
        return $_POST[$var];
    } else {
        return "";
    }
}
?>