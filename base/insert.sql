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


INSERT INTO proFormat
VALUES 
    (default,'ART001', 10, 25000, '2023-01-01', 'ser1'),
    (default,'ART001', 8, 19000, '2023-02-15', 'ser1'),
    (default,'ART001', 15, 20000, '2023-03-10', 'ser1'),
    (default,'ART002', 5, 12000, '2023-04-20', 'ser2'),
    (default,'ART002', 12, 10000, '2023-05-05', 'ser2'),
    (default,'ART002', 7, 9000, '2023-06-15', 'ser2');
