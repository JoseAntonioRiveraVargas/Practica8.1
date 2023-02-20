<?php
require 'bootstrap.php';

$statement = <<<EOS
    CREATE TABLE IF NOT EXISTS contactos (
        id INT NOT NULL AUTO_INCREMENT,
        nombre VARCHAR(256) NOT NULL,
        telefono VARCHAR(10) NOT NULL,
        email VARCHAR(256) NOT NULL,
        created_at DATETIME NOT NULL,
        updated_at DATETIME NOT NULL,
        PRIMARY KEY (id)
    ) ENGINE=INNODB;

    INSERT INTO contactos
        (nombre, telefono, email, created_at, updated_at)
    VALUES
        ('Jose', '685974321', 'jose@gmail.com', NOW(), NOW()),
        ('Ivan', '632198745', 'ivan@gmail.com', NOW(), NOW()),
        ('Sergio', '639825471', 'sergio@gmail.com', NOW(), NOW()),
        ('Rafa', '632147985', 'rafa@gmail.com', NOW(), NOW()),
        ('David', '654789123', 'david@gmail.com', NOW(), NOW());
EOS;

try {
    $createTable = $dbConnection->exec($statement);
    echo "Success!\n";
} catch (\PDOException $e) {
    exit($e->getMessage());
}