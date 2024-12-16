<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = "db_final";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'] ?? '';
        $department = $_POST['department'];
        $position = $_POST['position'] ?? '';
        $email = $_POST['email'];

        $sql = "INSERT INTO employee(firstName, lastName, department, position, email)
        VALUES (:firstName, :lastName, :department, :position, :email)";

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':firstName', $firstName, PDO::PARAM_STR);
        $stmt->bindParam(':lastName', $lastName, PDO::PARAM_STR);
        $stmt->bindParam(':department', $department, PDO::PARAM_STR);
        $stmt->bindParam(':position', $position, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        $stmt->execute();
        echo "Data inserted successfully!";
    } else {
        echo "Please fill in all required fields.";
    }
} catch (PDOException $e) {
    error_log("Database error: " . $e->getMessage());
    echo "An error occurred. Please try again.";
} finally {
    $pdo = null;
}
?>
