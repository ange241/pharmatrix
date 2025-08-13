-- Création de la base de données
drop database if exists pharmatrixdb
CREATE DATABASE pharmatrixdb character set utf8;
USE pharmatrixdb;

-- Table des utilisateurs
CREATE TABLE users (
    id_users INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    photo text,
    `location` VARCHAR(255),
    email VARCHAR(150) UNIQUE NOT NULL,
    `password`VARCHAR(255) NOT NULL,
    `role` VARCHAR(50) NOT NULL
);

insert into users(first_name, last_name, phone, `location`, email, `password`, `role`)
value
('admin', 'admin', '695331293', 'PK13', 'admin', 'admin@gmail.com', 'admin', 'Administrateur', null)

-- Table des pharmacies
CREATE TABLE pharmacie (
    pharmacie_id INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(150) NOT NULL,
    `location` VARCHAR(255) NOT NULL,
    phone VARCHAR(20)
);

-- Table de liaison users <-> pharmacie (relation plusieurs-à-plusieurs)
CREATE TABLE users_pharmacie (
    id_users int not null, 
    pharmacie_id int not null,
    PRIMARY KEY (id_users, pharmacie_id),
    FOREIGN KEY (id_users) REFERENCES users(id_users) ON DELETE CASCADE,
    FOREIGN KEY (pharmacie_id) REFERENCES pharmacie(pharmacie_id) ON DELETE CASCADE
);

-- Table des coupons
CREATE TABLE coupon (
    coupon_id INT AUTO_INCREMENT PRIMARY KEY,
    reference VARCHAR(100) NOT NULL,
    create_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    id_users INT NOT NULL,
    FOREIGN KEY (id_users) REFERENCES users(id_users) ON DELETE CASCADE
);

-- Table des médicaments (propre à une pharmacie)
CREATE TABLE medicament (
    medicament_id INT AUTO_INCREMENT PRIMARY KEY,
    price DECIMAL(10,2) NOT NULL,
    quantite INT NOT NULL,
    pharmacie_id INT NOT NULL,
    FOREIGN KEY (pharmacie_id) REFERENCES pharmacie(pharmacie_id) ON DELETE CASCADE
);

-- Table de tous les médicaments (catalogue général)
CREATE TABLE all_medicament (
    all_medicament_id INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(150) NOT NULL,
    photo text,
    description TEXT
);

-- Liaison medicament <-> all_medicament (relation plusieurs-à-un)
ALTER TABLE medicament
ADD COLUMN all_medicament_id INT,
ADD FOREIGN KEY (all_medicament_id) REFERENCES all_medicament(all_medicament_id) ON DELETE CASCADE;

-- Table de liaison coupon <-> medicament (relation plusieurs-à-plusieurs)
CREATE TABLE coupon_medicament (
    coupon_id INT,
    medicament_id INT,
    PRIMARY KEY (coupon_id, medicament_id),
    FOREIGN KEY (coupon_id) REFERENCES coupon(coupon_id) ON DELETE CASCADE,
    FOREIGN KEY (medicament_id) REFERENCES medicament(medicament_id) ON DELETE CASCADE
); 


