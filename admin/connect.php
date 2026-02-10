<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "pendaftaran";

try {
    $connect = new PDO ("mysql:host=$hostname;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo "error :" . $e->getMassage();
    
}

?>