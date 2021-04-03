--Creating the database--


CREATE DATABASE Objects;

--Creating the member table--

CREATE TABLE Member1533(ID INT AUTO_INCREMENT,
                        Name varchar(255),
                        LastName varchar(255),
                        UserName varchar(255),
                        Email varchar(255),
                        Pass varchar(255),
                        Finished int,
                        Started int,
                        CreationDate DATETIME DEFAULT CURRENT_TIMESTAMP,
                        PRIMARY KEY(ID)
                        );