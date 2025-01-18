CREATE DATABASE hospital_management_system;

USE hospital_management_system;

CREATE TABLE patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(50) NOT NULL,
    disease VARCHAR(255) NOT NULL,
    E_mail VARCHAR(255) NOT NULL,
    Phone_number VARCHAR(255) NOT NULL,
     Specialist VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
