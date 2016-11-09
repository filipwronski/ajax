<?php
$user = 'root';
$pass = 'toor';
$resultArray=[''];
$name=$_POST['name1'];

try {
    $dbh = new PDO('mysql:host=localhost;dbname=test;charset=utf8', $user, $pass);
    foreach ($dbh->query('SELECT * from adres') as $row) {
        array_push($resultArray, $row['city']);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
if($name==='filip'){
   echo (json_encode($resultArray)); 
}
else{
    return null;
}
?>