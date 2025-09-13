<?php
// config.php
session_start();

$DB_HOST = '127.0.0.1';
$DB_NAME = 'espetaria_texas';
$DB_USER = 'root';
$DB_PASS = '';

try {
  $pdo = new PDO(
    "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4",
    $DB_USER,
    $DB_PASS,
    [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]
  );
} catch (PDOException $e) {
  die("Erro ao conectar no banco: " . $e->getMessage());
}

// Funções simples
function csrf_token() {
  if (empty($_SESSION['csrf'])) {
    $_SESSION['csrf'] = bin2hex(random_bytes(16));
  }
  return $_SESSION['csrf'];
}
function check_csrf($token) {
  return isset($_SESSION['csrf']) && hash_equals($_SESSION['csrf'], $token ?? '');
}
