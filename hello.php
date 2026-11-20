<?php
// hello.php - Returns data as JSON, not HTML

header('Content-Type: application/json charset=utf-8');

$response = [
    'message' => 'Hello, World!',
    'student' => 'Christian Luke F. Decena',
    'course' => 'IPT 102-3A',
    'time' => date('Y-m-d H:i:s')
];

// Return JSON response
echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>