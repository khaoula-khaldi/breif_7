--creation de la base de données 
CREATE DATABASE smart_alet; 
--entre dans la base de données
USe smart_walet;
--creation de tableau Incomes 
CREATE TABLE Incomes (
    id int PRIMARY KEY AUTO_INCREMENT,
    Montant DECIMAL(8,3) NOT NULL,
    descreption varchar(255) NOT NULL,
    date_enter DATE NOT NULL
);

--creation de tableau Expenses  
CREATE TABLE Expenses  (
    id int PRIMARY KEY AUTO_INCREMENT,
    Montant DECIMAL(8,3) NOT NULL,
    descreption varchar(255) NOT NULL,
    date_enter DATE NOT NULL
);