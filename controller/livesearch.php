<?php
include '../model/db.php';


if(isset($_GET['q'])){
    $q = $_GET['q'];
    $pdo = new PDO('mysql:host=localhost;dbname=database_name', 'username', 'password');
    $stmt = $pdo->prepare('SELECT * FROM table_name WHERE name LIKE :name');
    $stmt->execute(['name' => '%'.$q.'%']);
    $data = $stmt->fetchAll();
    echo json_encode($data);
}

?>