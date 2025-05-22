<?php
// Database configuration
$db_host = 'localhost';      // Your database host (usually 'localhost')
$db_name = 'endevo';  // Your database name
$db_user = 'root';  // Your database username
$db_pass = '';  // Your database password

// Connect to database
try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Process form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $inquiry = htmlspecialchars($_POST['inquiry']);
    
    // Validate input
    $errors = [];
    
    if (empty($name)) {
        $errors[] = 'Name is required';
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Valid email is required';
    }
    
    if (empty($phone)) {
        $errors[] = 'Phone number is required';
    }
    
    if (empty($inquiry)) {
        $errors[] = 'Inquiry message is required';
    }
    
    // If no errors, insert into database
    if (empty($errors)) {
        try {
            $stmt = $pdo->prepare("INSERT INTO Inquiries (name, email, phone, inquiry, created_at) 
                                  VALUES (:name, :email, :phone, :inquiry, NOW())");
            
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':inquiry', $inquiry);
            
            if ($stmt->execute()) {
                // Redirect back with success status
                header('Location: contact.php?status=success');
                exit;
            } else {
                header('Location: contact.php?status=error');
                exit;
            }
        } catch (PDOException $e) {
            header('Location: contact.php?status=error');
            exit;
        }
    } else {
        header('Location: contact.php?status=error');
        exit;
    }
} else {
    // If not a POST request, redirect to contact page
    header('Location: contact.php');
    exit;
}