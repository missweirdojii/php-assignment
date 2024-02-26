<?php
$storedUsername ="user123";
$storedPassword ="password123";

$userInputUsername ="user123";
$userInputPassword ="password123";
if($userInputUsername === $storedUsername && $userInputPassword ===$storedPassword ){
    echo"login successful";
}
else{
    echo"invalid  credentials";
}
?>