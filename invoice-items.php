<?php

$host = '127.0.0.1'; 
$db = 'sample';
$username = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $username, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


$sql = 'SELECT COUNT(*) as count FROM invoices';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$count = $stmt->fetch()['count'];

$total = 0;

for ($id = 1 ; $id <= 5 ; $id++) {

        $sql = 'SELECT * FROM invoices WHERE id = ?';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();

        if ($row) {
            $total += $row['unit_price'] * $row['quantity'];
        } else {
            echo "id = $id  No record found. \n";
        }
}

echo 'Total invoice = '.$total;

$pdo = null;