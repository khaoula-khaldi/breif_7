--creation de la base de données 
CREATE DATABASE smart walet; 
--entre dans la base de données
USe smart walet;
--creation de tableau Incomes 
CREATE TABLE Incomes (
    id int PRIMARY KEY AUTO_INCREMENT,
    Montant DECIMAL(8,3) NOT NULL,
    description varchar(255) NOT NULL,
    date_enter DATE NOT NULL
);

--creation de tableau Expenses  
CREATE TABLE Expenses  (
    id int PRIMARY KEY AUTO_INCREMENT,
    Montant DECIMAL(8,3) NOT NULL,
    description varchar(255) NOT NULL,
    date_enter DATE NOT NULL
);