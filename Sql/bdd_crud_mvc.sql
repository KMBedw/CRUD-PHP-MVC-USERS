-- Création de la Bdd
CREATE DATABASE IF NOT EXISTS mvc_crud_bdd;

-- Utilisation de la Bdd
USE mvc_crud_bdd;

-- Création table users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, email, password) VALUES
('Edwin', 'edwin3@live.com', '098f6bcd4621d373cade4e832627b4f6'),
('Elena', 'elenafade@gmail.com', '098f6bcd4621d373cade4e832627b4f6');

