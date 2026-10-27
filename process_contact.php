<?php
header('Content-Type: application/json; charset=utf-8');
require_once __DIR__ . '/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée.'], JSON_UNESCAPED_UNICODE);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);
if (!is_array($input)) {
    $input = $_POST;
}

$result = africodeSaveContact($input);

http_response_code($result['success'] ? 200 : 400);
echo json_encode($result, JSON_UNESCAPED_UNICODE);
