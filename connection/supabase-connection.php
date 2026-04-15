<?php
$host = "db.tatzmipayfttphabotvp.supabase.co";
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "pinandtell2026_";

try {
    $pdo = new PDO(
        "pgsql:host=$host;port=$port;dbname=$dbname",
        $user,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Supabase connection failed: " . $e->getMessage());
}
