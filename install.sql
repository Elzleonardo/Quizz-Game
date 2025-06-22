CREATE DATABASE IF NOT EXISTS quiz_game;
USE quiz_game;

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) UNIQUE,
  password VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS questions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  level INT,
  qtype ENUM('add','sub','mul','div'),
  operand1 INT,
  operand2 INT
);

-- Akun default
INSERT INTO users (username, password) VALUES ('elza233', 'kadal2323');

-- Soal akan ditambahkan secara manual atau dari file SQL yang kamu dapat sebelumnya