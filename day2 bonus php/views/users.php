<?php

$users = convert_file_to_array();
$types=["Visit Date","IP","Email"];
foreach($users as $user){
    $counter=0;
    $user_details = explode(",",$user);
      echo "New User <br/>";
      echo str_repeat("*", 20);
        echo "<div>";
    foreach($user_details as $value ){
    
      echo "<h4>$types[$counter]: $value </h4>";
      $counter++;
    }
      echo "</div>";
}
?>