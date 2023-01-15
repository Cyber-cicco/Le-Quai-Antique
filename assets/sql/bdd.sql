DROP DATABASE restaurant;

CREATE DATABASE restaurant;

--CREATE USER 'user2'@'localhost' IDENTIFIED BY 'root';

GRANT ALL PRIVILEGES ON restaurant.* TO 'user2'@'localhost';

USE restaurant;

CREATE TABLE IF NOT EXISTS Utilisateur (
	id_utilisateur VARCHAR(320) NOT NULL,
	mot_de_passe VARCHAR(60) NOT NULL,
	is_admin BOOLEAN NOT NULL,
	nb_convives NUMERIC(2),
	PRIMARY KEY(id_utilisateur)
);

CREATE TABLE IF NOT EXISTS Restaurant (
	id_restaurant NUMERIC(6) NOT NULL,
	nom_restaurant VARCHAR(255),
	PRIMARY KEY(id_restaurant)
);

CREATE TABLE IF NOT EXISTS Place (
	id_table NUMERIC(6) NOT NULL,
	nb_places NUMERIC(3) NOT NULL,
	id_restaurant NUMERIC(6) NOT NULL,
	PRIMARY KEY(id_table),
	FOREIGN KEY(id_restaurant) REFERENCES Restaurant(id_restaurant)
);

CREATE TABLE IF NOT EXISTS Reservation (
	id_table NUMERIC(6) NOT NULL,
	id_utilisateur VARCHAR(320) NOT NULL,
	date_reservation DATETIME NOT NULL,
	PRIMARY KEY(id_table, id_utilisateur, date_reservation),
	FOREIGN KEY(id_table) REFERENCES Place(id_table),
	FOREIGN KEY(id_utilisateur) REFERENCES Utilisateur(id_utilisateur)
);

CREATE TABLE IF NOT EXISTS Allergene (
	nom_allergene VARCHAR(255) NOT NULL,
	PRIMARY KEY(nom_allergene)
);

CREATE TABLE IF NOT EXISTS Allergie (
	id_utilisateur VARCHAR(320) NOT NULL,
	nom_allergene VARCHAR(255) NOT NULL,
	PRIMARY KEY(id_utilisateur, nom_allergene),
	FOREIGN KEY(id_utilisateur) REFERENCES Utilisateur(id_utilisateur),
	FOREIGN KEY(nom_allergene) REFERENCES Allergene(nom_allergene)
);

CREATE TABLE IF NOT EXISTS Plat (
	nom_plat VARCHAR(255) NOT NULL,
	type_plat VARCHAR(255) NOT NULL,
	description VARCHAR(255),
	prix NUMERIC(8,2) NOT NULL,
	PRIMARY KEY(nom_plat)
);

CREATE TABLE IF NOT EXISTS Plallergene (
	nom_plat VARCHAR(255) NOT NULL,
	nom_allergene VARCHAR(255) NOT NULL,
	PRIMARY KEY(nom_plat, nom_allergene),
	FOREIGN KEY(nom_plat) REFERENCES Plat(nom_plat),
	FOREIGN KEY(nom_allergene) REFERENCES Allergene(nom_allergene)
);

CREATE TABLE IF NOT EXISTS Menu (
	nom_menu VARCHAR(255) NOT NULL,
	description VARCHAR(255) NOT NULL,
	PRIMARY KEY(nom_menu)
);

CREATE TABLE IF NOT EXISTS Formule (
	nom_formule VARCHAR(255) NOT NULL,
	description VARCHAR(255),
	prix NUMERIC(8,2) NOT NULL,
	nom_menu VARCHAR(255),
	PRIMARY KEY(nom_formule, nom_menu),
	FOREIGN KEY(nom_menu) REFERENCES Menu(nom_menu)
);

CREATE TABLE IF NOT EXISTS Composition (
	nom_formule VARCHAR(255) NOT NULL,
	nom_plat VARCHAR(255) NOT NULL,
	PRIMARY KEY(nom_formule, nom_plat),
	FOREIGN KEY(nom_formule) REFERENCES Formule(nom_formule),
	FOREIGN KEY(nom_plat) REFERENCES Plat(nom_plat)
);