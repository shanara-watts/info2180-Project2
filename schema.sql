/* Database Creation*/ 
DROP DATABASE IF EXISTS bugme;
CREATE DATABASE bugme;
USE bugme;

/* User Table*/
CREATE TABLE Users(
	id INTEGER(5) NOT NULL,
	firstname VARCHAR(10) NOT NULL,
	lastname VARCHAR(10) NOT NULL,
	password VARCHAR(15) NOT NULL,
	email VARCHAR(50) NOT NULL,
	date_joined datetime NOT NULL,

    PRIMARY KEY(id)
);

CREATE TABLE Issues(
	id INTEGER(5) NOT NULL,
	title VARCHAR(5) NOT NULL,
	decription text NOT NULL,
	type VARCHAR(50) NOT NULL,
	priority VARCHAR(20) NOT NULL,
	status VARCHAR(20) NOT NULL,
	assigned_to INTEGER(5) NOT NULL,
	created_by INTEGER(5) NOT NULL,
	created datetime NOT NULL,
	updated datetime NOT NULL,

    PRIMARY KEY(id),
    FOREIGN KEY (assigned_to) references Users(id),
    FOREIGN KEY (created_by) references Users(id)
);

GRANT ALL PRIVELEGES ON bugme.* TO 'admin'@'localhost' IDENTIFIED BY 'password123';

INSERT INTO Users (firstname, lastname, password, email, date_joined) VALUES ('Bugme', 'Admin', MD5('password123'), 'admin@bugme.com', '2010-01-01 00:00:00');