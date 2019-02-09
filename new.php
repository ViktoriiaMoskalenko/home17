<?php
require 'db.php';
$user = 'root';
$pass = '';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=home17', $user, $pass);
    foreach($dbh->query("SELECT * from users WHERE login = 'vika_01_mos'") as $row) {
        //print_r($row);

        echo $row['email'] . "<br>";
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


//$stmt = $dbh->prepare("SELECT * FROM users WHERE login = 'vika_01_mos' ");
//$result = $stmt->execute();
//var_dump($result);