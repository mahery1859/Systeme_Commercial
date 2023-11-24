insert into directeur values (default, 'DirecteurG', 'directeur@gmail.com', '1234');

insert into service values (default, 'Mecanique', default);
insert into service values (default, 'Comptable', default);

insert into categorie values (default, 'Alimentaire');
insert into categorie values (default, 'Vestimentaire');
insert into categorie values (default, 'Bureautique');
insert into categorie values (default, 'Fourniture');

insert into article values (default, 'Alimentaire');
insert into categorie values (default, 'Vestimentaire');

insert into chef_service values (default, '10245', 'ChefDept1@gmail.com', '1234','ser1');
insert into chef_service values (default, '10246', 'ChefDept2@gmail.com', '1234','ser2');

INSERT INTO categorie VALUES (default,'Alimentaire'), (default,'vestimentaire'), (default,'Bureautique'), (default,'Fourniture');

-- Inserting data into the article table
INSERT INTO article  VALUES
    (default,'Disque Dur', 'CAT003'),
    (default,'Ordinateur', 'CAT003'),
    (default,'Cahier', 'CAT004'),
    (default,'Stylo', 'CAT004');

INSERT INTO fournisseurs
VALUES 
    (default,'Jumbo Score', 'jumbo@gmail.com'),
    (default,'U', 'u@gmail.com')
    ;
INSERT INTO proFormat
VALUES 
    (default,'ART001', 10, 25000, '2023-01-01', 1),
    (default,'ART001', 8, 19000, '2023-02-15', 2),
    (default,'ART002', 15, 2000000, '2023-03-10',1),
    (default,'ART002', 5, 1200000, '2023-04-20', 2),
    (default,'ART003', 12, 2000, '2023-05-05', 1),
    (default,'ART003', 7, 3000, '2023-06-15', 2),
    (default,'ART004', 12, 1000, '2023-05-05', 1),
    (default,'ART004', 7, 900, '2023-06-15', 2)
    ;
