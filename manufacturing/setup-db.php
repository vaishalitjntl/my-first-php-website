
<?php
require_once __DIR__ . '/includes/db.php';

$conn->exec("
    CREATE TABLE IF NOT EXISTS products (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        description TEXT DEFAULT '',
        price REAL NOT NULL DEFAULT 0,
        image TEXT DEFAULT '',
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )
");

$products = [
    ['Industrial Uniform', 850],
    ['Corporate Uniform', 750],
    ['Fire Safety Equipment', 2500],
    ['Industrial Safety Helmet', 450],
    ['Water Management System', 5000],
    ['Water Storage Solution', 3500]
];

$stmt = $conn->prepare(
    'INSERT INTO products (name, price)
     SELECT :name, :price
     WHERE NOT EXISTS (
         SELECT 1 FROM products WHERE name = :check_name
     )'
);

foreach ($products as [$name, $price]) {
    $stmt->execute([
        ':name' => $name,
        ':price' => $price,
        ':check_name' => $name
    ]);
}

echo "Database setup successful!";
