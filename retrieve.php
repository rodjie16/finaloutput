<?php

$host = 'localhost'; 
$dbname = 'db_final';
$username = 'root'; 
$password = ''; 

try {
   
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

       
        $stmt = $pdo->prepare("SELECT * FROM employee WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        
        $employee = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($employee) {
            echo json_encode($employee); 
        } else {
            echo json_encode([]); 
        }
    } else {
        
        $stmt = $pdo->query("SELECT * FROM employee");
        $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($employees); 
    }

} catch (PDOException $e) {
    echo json_encode(['error' => 'Database error: ' . $e->getMessage()]);
}
?>
