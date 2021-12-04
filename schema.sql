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
	description text NOT NULL,
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


INSERT INTO Users (firstname, lastname, password, email, date_joined) VALUES ('Bugme', 'Admin', MD5('password123'), 'admin@project2.com', '2015-12-03 00:00:00');
INSERT INTO Users (firstname, lastname, password, email, date_joined) VALUES ('Shanara', 'Watts', MD5('watts456'), 'watts@project2.com', '2020-12-03 12:45:10');
INSERT INTO Users (firstname, lastname, password, email, date_joined) VALUES ('Tarique', 'Tulloch', MD5('loch789'), 'tulloch@project2.com', '2017-10-24 07:12:20');
INSERT INTO Users (firstname, lastname, password, email, date_joined) VALUES ('Daeshaun', 'Gouldbourne', MD5('gould321'), 'gould@project2.com', '2010-02-14 17:09:09');
INSERT INTO Users (firstname, lastname, password, email, date_joined) VALUES ('Javaur', 'Gassop', MD5('gassop876'), 'gassop@project2.com', '2018-01-01 00:00:00');
INSERT INTO Users (firstname, lastname, password, email, date_joined) VALUES ('Maleik', 'Miller', MD5('miller543'), 'miller@project2.com', '2015-12-03 00:00:00');


INSERT INTO Issues (title, description, type, priority, status, assigned_to, created_by, created, updated) VALUES ('XSS Vulnerability in Add User Form', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Proposal', 'Major', 'Open', 1, 2, '2019-11-01 16:30:12', '2019-11-08 10:00:00');
INSERT INTO Issues (title, description, type, priority, status, assigned_to, created_by, created, updated) VALUES ('Location Service isnt working', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Bug', 'Major', 'Open', 4, 2, '2019-10-15 16:30:12', '2019-12-08 10:00:00');
INSERT INTO Issues (title, description, type, priority, status, assigned_to, created_by, created, updated) VALUES ('Setup Logger', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Proposal', 'Major', 'Closed', 2, 2, '2019-08-10 18:32:12', '2019-10-18 01:00:00');
INSERT INTO Issues (title, description, type, priority, status, assigned_to, created_by, created, updated) VALUES ('Create API Documentation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Proposal', 'Minor', 'In Progress', 5, 1, '2019-10-29 17:33:12', '2019-11-29 12:34:18');





