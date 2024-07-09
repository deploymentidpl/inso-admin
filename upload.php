<?php
header('Content-Type: application/json');

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method.');
    }

    if (!isset($_FILES['file'])) {
        throw new Exception('No file uploaded.');
    }

    $file = $_FILES['file'];
    $uploadDirectory = 'uploads/';

    // Ensure the upload directory exists
    if (!is_dir($uploadDirectory)) {
        if (!mkdir($uploadDirectory, 0777, true)) {
            throw new Exception('Failed to create upload directory.');
        }
    }

    // Generate a unique file name to prevent overwriting existing files
    $fileName = uniqid() . '-' . basename($file['name']);
    $uploadPath = $uploadDirectory . $fileName;

    if (!move_uploaded_file($file['tmp_name'], $uploadPath)) {
        throw new Exception('Failed to move uploaded file.');
    }

    echo json_encode(['message' => 'File uploaded successfully!']);
} catch (Exception $e) {
    echo json_encode(['message' => $e->getMessage()]);
}
?>
