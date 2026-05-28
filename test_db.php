<?php
require 'vendor/autoload.php';

// Carregar .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['DB_HOST'] ?? 'aws-0-sa-east-1.pooler.supabase.com';
$port = $_ENV['DB_PORT'] ?? 5432;
$database = $_ENV['DB_DATABASE'] ?? 'postgres';
$username = $_ENV['DB_USERNAME'] ?? 'postgres';
$password = $_ENV['DB_PASSWORD'] ?? '';

echo "Testando conexão com PostgreSQL...\n";
echo "Host: $host\n";
echo "Port: $port\n";
echo "Database: $database\n";
echo "Username: $username\n";
echo "Password: " . (strlen($password) > 0 ? substr($password, 0, 5) . "..." : "[vazio]") . "\n\n";

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$database";
    $pdo = new PDO($dsn, $username, $password);
    
    echo "✅ CONEXÃO SUCESSO!\n";
    
    // Testar query simples
    $result = $pdo->query("SELECT NOW() as current_time");
    $row = $result->fetch(PDO::FETCH_ASSOC);
    echo "Hora do servidor: " . $row['current_time'] . "\n";
    
} catch (PDOException $e) {
    echo "❌ ERRO DE CONEXÃO:\n";
    echo "Code: " . $e->getCode() . "\n";
    echo "Message: " . $e->getMessage() . "\n";
}
?>
