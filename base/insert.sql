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

INSERT INTO courrier_fournisseurs
VALUES 
    (default,1),
    (default,2)
    ;

