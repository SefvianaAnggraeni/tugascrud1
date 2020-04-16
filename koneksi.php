
<?php 

try {
    $conn = new PDO("mysql:host = localhost;dbname=pwpb","root","");
} catch (PDOException $e){
    echo $e->getMessage();
}

?>