<?php
return [
  'dsn' => 'mysql:host=localhost;dbname=phplaracast;charset=utf8mb4;',
  'user' => 'root',
  'password' => '123',
  'options' => [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
  ],
];
