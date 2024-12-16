<?php

$host = 'localhost'; 
$dbname = 'db_final';
$username = 'root'; 
$password = '';

try {
    
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    if (isset($_POST['id'], $_POST['firstName'], $_POST['lastName'], $_POST['department'], $_POST['position'], $_POST['email'])) {
        $id = $_POST['id'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $department = $_POST['department'];
        $position = $_POST['position'];
        $email = $_POST['email'];

       
        $stmt = $pdo->prepare("UPDATE employee SET firstName = :firstName, lastName = :lastName, department = :department, position = :position, email = :email WHERE id = :id");

       
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':firstName', $firstName, PDO::PARAM_STR);
        $stmt->bindParam(':lastName', $lastName, PDO::PARAM_STR);
        $stmt->bindParam(':department', $department, PDO::PARAM_STR);
        $stmt->bindParam(':position', $position, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

      
        $stmt->execute();

      
        echo json_encode(['success' => 'Employee updated successfully.']);
    } else {
        echo json_encode(['error' => 'Missing required fields.']);
    }

} catch (PDOException $e) {
    
    echo json_encode(['error' => 'Database error: ' . $e->getMessage()]);
}
?>
