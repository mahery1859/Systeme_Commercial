insert into directeur values (default, 'DirecteurG', 'directeur@gmail.com', '1234');

insert into service values (default, 'Mecanique', default);
insert into service values (default, 'Comptable', default);

insert into categorie values (default, 'Alimentaire');
insert into categorie values (default, 'Vestimentaire');
insert into categorie values (default, 'Bureautique');
insert into categorie values (default, 'Fourniture');


insert into chef_service values (default, '10245', 'ChefDept1@gmail.com', '1234',"SER1");
insert into chef_service values (default, '10246', 'ChefDept2@gmail.com', '1234',"SER2");


INSERT INTO proFormat (idArticle, Quantite, Prix_unitaire, Date, idService)
VALUES 
    ('ART001', 10, 25000, '2023-01-01', SER1),
    ('ART001', 8, 19000, '2023-02-15', SER1),
    ('ART001', 15, 20000, '2023-03-10', SER1),
    ('ART002', 5, 12000, '2023-04-20', SER2),
    ('ART002', 12, 10000, '2023-05-05', SER2),
    ('ART002', 7, 9000, '2023-06-15', SER2);
