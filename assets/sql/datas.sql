INSERT INTO Utilisateur VALUES('user1', 'mdp1', 0, 1);
INSERT INTO Utilisateur VALUES('user2', 'mdp2', 0, 2);
INSERT INTO Utilisateur VALUES('user3', 'mdp3', 0, 0);
INSERT INTO Utilisateur VALUES('user4', 'mdp4', 0, 3);
INSERT INTO Utilisateur VALUES('user5', 'mdp5', 0, 8);
INSERT INTO Utilisateur VALUES('user6', 'mdp6', 0, 15);
INSERT INTO Utilisateur VALUES('user7', 'mdp7', 0, 1);
INSERT INTO Utilisateur VALUES('user8', 'mdp8', 0, 1);
INSERT INTO Utilisateur VALUES('user9', 'mdp9', 0, 3);
INSERT INTO Utilisateur VALUES('admin1', 'admin1', 1, 0);

INSERT INTO Restaurant VALUES(1, 'Le Quai Antique Chamberry');

INSERT INTO Place VALUES(1, 6, 1);
INSERT INTO Place VALUES(2, 4, 1);
INSERT INTO Place VALUES(3, 8, 1);
INSERT INTO Place VALUES(4, 12, 1);
INSERT INTO Place VALUES(5, 2, 1);
INSERT INTO Place VALUES(6, 2, 1);
INSERT INTO Place VALUES(7, 2, 1);
INSERT INTO Place VALUES(8, 6, 1);
INSERT INTO Place VALUES(9, 6, 1);
INSERT INTO Place VALUES(10, 8, 1);

INSERT INTO Reservation VALUES(5, 'user1', '2023-03-10 20:15:00');
INSERT INTO Reservation VALUES(2, 'user2', '2023-03-10 20:15:00');
INSERT INTO Reservation VALUES(3, 'user6', '2023-03-10 12:00:00');
INSERT INTO Reservation VALUES(10, 'user6', '2023-03-10 12:00:00');
INSERT INTO Reservation VALUES(5, 'user1', '2023-03-12 20:15:00');
INSERT INTO Reservation VALUES(4, 'user5', '2023-03-11 21:30:00');
INSERT INTO Reservation VALUES(7, 'user8', '2023-03-11 22:00:00');

INSERT INTO Allergene VALUES('Gluten');
INSERT INTO Allergene VALUES('Crustacés');
INSERT INTO Allergene VALUES('Oeufs');
INSERT INTO Allergene VALUES('Poissons');
INSERT INTO Allergene VALUES('Arachides');
INSERT INTO Allergene VALUES('Soja');
INSERT INTO Allergene VALUES('Lait');
INSERT INTO Allergene VALUES('Fruits à coque');
INSERT INTO Allergene VALUES('Moutarde');
INSERT INTO Allergene VALUES('Céleri');
INSERT INTO Allergene VALUES('Graines de sésame');
INSERT INTO Allergene VALUES('Anhydrides sulfureux');
INSERT INTO Allergene VALUES('Lupin');
INSERT INTO Allergene VALUES('Mollusques');

INSERT INTO Allergie VALUES('user1', 'Mollusques');
INSERT INTO Allergie VALUES('user6', 'Mollusques');
INSERT INTO Allergie VALUES('user6', 'Arachides');
INSERT INTO Allergie VALUES('user9', 'Céleri');

INSERT INTO Plat VALUES('plat1', 'entrée', 'c\'est une entrée', 4.30);
INSERT INTO Plat VALUES('plat2', 'entrée', 'c\'est une entrée', 4.99);
INSERT INTO Plat VALUES('plat3', 'entrée', 'c\'est une entrée', 5.99);
INSERT INTO Plat VALUES('plat4', 'entrée', 'c\'est une entrée', 4.99);
INSERT INTO Plat VALUES('plat5', 'entrée', 'c\'est une entrée', 3.99);
INSERT INTO Plat VALUES('plat6', 'entrée', 'c\'est une entrée', 4.99);
INSERT INTO Plat VALUES('plat7', 'principal', 'c\'est un plat principal', 10.50);
INSERT INTO Plat VALUES('plat8', 'principal', 'c\'est un plat principal', 19.50);
INSERT INTO Plat VALUES('plat9', 'principal', 'c\'est un plat principal', 18.50);
INSERT INTO Plat VALUES('plat10', 'principal', 'c\'est un plat principal', 25.50);
INSERT INTO Plat VALUES('plat11', 'principal', 'c\'est un plat principal', 12.50);
INSERT INTO Plat VALUES('plat12', 'principal', 'c\'est un plat principal', 17.50);
INSERT INTO Plat VALUES('plat13', 'dessert', 'c\'est un dessert', 5.50);
INSERT INTO Plat VALUES('plat14', 'dessert', 'c\'est un dessert', 2.50);
INSERT INTO Plat VALUES('plat15', 'dessert', 'c\'est un dessert', 4.50);
INSERT INTO Plat VALUES('plat16', 'dessert', 'c\'est un dessert', 4.50);
INSERT INTO Plat VALUES('plat17', 'dessert', 'c\'est un dessert', 3.50);
INSERT INTO Plat VALUES('plat18', 'dessert', 'c\'est un dessert', 4.50);

INSERT INTO Plallergene VALUES('plat1','Mollusques');
INSERT INTO Plallergene VALUES('plat1','Moutarde');
INSERT INTO Plallergene VALUES('plat2','Graines de sésame');
INSERT INTO Plallergene VALUES('plat4','Céleri');
INSERT INTO Plallergene VALUES('plat5','Gluten');
INSERT INTO Plallergene VALUES('plat5','Moutarde');
INSERT INTO Plallergene VALUES('plat9','Gluten');
INSERT INTO Plallergene VALUES('plat9','Oeufs');
INSERT INTO Plallergene VALUES('plat9','Soja');
INSERT INTO Plallergene VALUES('plat9','Anhydrides sulfureux');
INSERT INTO Plallergene VALUES('plat9','Lupin');
INSERT INTO Plallergene VALUES('plat9','Crustacés');
INSERT INTO Plallergene VALUES('plat9','Mollusques');
INSERT INTO Plallergene VALUES('plat9','Moutarde');

INSERT INTO Menu VALUES ('menu1', 'C\'est un menu. Et il est bon.');
INSERT INTO Menu VALUES ('menu2', 'C\'est un menu. Et il est bon.');
INSERT INTO Menu VALUES ('menu3', 'C\'est un menu. Et il est bon.');
INSERT INTO Menu VALUES ('menu4', 'C\'est un menu. Et il est bon.');
INSERT INTO Menu VALUES ('menu5', 'C\'est un menu. Et il est bon.');
INSERT INTO Menu VALUES ('menu6', 'C\'est un menu. Et il est bon.');

INSERT INTO Formule VALUES('formule1', 'vrooooooooooooooooooooooooooooom', 22.50, 'menu1');
INSERT INTO Formule VALUES('formule2', 'C\'est une formule', 29.99, 'menu1');
INSERT INTO Formule VALUES('formule3', 'C\'est une formule', 19.99, 'menu2');
INSERT INTO Formule VALUES('formule4', 'C\'est une formule', 14.99, 'menu2');
INSERT INTO Formule VALUES('formule5', 'C\'est une formule', 22.50, 'menu3');
INSERT INTO Formule VALUES('formule6', 'C\'est une formule', 20.50, 'menu3');
INSERT INTO Formule VALUES('formule7', 'C\'est une formule', 19.50, 'menu3');
INSERT INTO Formule VALUES('formule8', 'C\'est une formule', 25.50, 'menu4');
INSERT INTO Formule VALUES('formule9', 'C\'est une formule', 24.50, 'menu4');
INSERT INTO Formule VALUES('formule10', 'C\'est une formule', 33.50, 'menu5');
INSERT INTO Formule VALUES('formule9', 'C\'est une formule', 38.50, 'menu5');
INSERT INTO Formule VALUES('formule11', 'C\'est une formule', 18.50, 'menu6');
INSERT INTO Formule VALUES('formule12', 'C\'est une formule', 21.50, 'menu6');

INSERT INTO Composition VALUES('formule1', 'plat1');
INSERT INTO Composition VALUES('formule1', 'plat7');
INSERT INTO Composition VALUES('formule1', 'plat12');
INSERT INTO Composition VALUES('formule2', 'plat2');
INSERT INTO Composition VALUES('formule2', 'plat13');
INSERT INTO Composition VALUES('formule2', 'plat7');
INSERT INTO Composition VALUES('formule3', 'plat8');
INSERT INTO Composition VALUES('formule3', 'plat12');
INSERT INTO Composition VALUES('formule3', 'plat1');
INSERT INTO Composition VALUES('formule4', 'plat5');
INSERT INTO Composition VALUES('formule4', 'plat6');
INSERT INTO Composition VALUES('formule5', 'plat1');
INSERT INTO Composition VALUES('formule5', 'plat10');
INSERT INTO Composition VALUES('formule5', 'plat16');
INSERT INTO Composition VALUES('formule6', 'plat16');
INSERT INTO Composition VALUES('formule6', 'plat3');
INSERT INTO Composition VALUES('formule7', 'plat10');
INSERT INTO Composition VALUES('formule7', 'plat14');
INSERT INTO Composition VALUES('formule8', 'plat16');
INSERT INTO Composition VALUES('formule8', 'plat17');
INSERT INTO Composition VALUES('formule8', 'plat18');
INSERT INTO Composition VALUES('formule9', 'plat5');
INSERT INTO Composition VALUES('formule9', 'plat11');
INSERT INTO Composition VALUES('formule9', 'plat17');
INSERT INTO Composition VALUES('formule10', 'plat18');
INSERT INTO Composition VALUES('formule10', 'plat5');
INSERT INTO Composition VALUES('formule10', 'plat7');
INSERT INTO Composition VALUES('formule11', 'plat3');
INSERT INTO Composition VALUES('formule11', 'plat9');
INSERT INTO Composition VALUES('formule11', 'plat13');
INSERT INTO Composition VALUES('formule12', 'plat1');
INSERT INTO Composition VALUES('formule12', 'plat9');