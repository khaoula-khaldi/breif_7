--creation de la base de données 
CREATE DATABASE smart_walet; 

USe smart_walet;
--creation de tableau Incomes 
CREATE TABLE Incomes (
    idIn int PRIMARY KEY AUTO_INCREMENT,
    MontantIn DECIMAL(10,2) NOT NULL,
    descreptionIn varchar(255) NOT NULL,
    date_enterIn DATE NOT NULL
);

--creation de tableau Expenses  
CREATE TABLE Expenses  (
    idEx int PRIMARY KEY AUTO_INCREMENT,
    MontantEx DECIMAL(10,2) NOT NULL,
    descreptionEx varchar(255) NOT NULL,
    date_enterEx DATE NOT NULL
);
