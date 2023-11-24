create database commerce;
\c commerce

create sequence seq_directeur;
create table if not exists directeur (
    idDirecteur varchar(10) default concat('DIROO') || nextval('seq_directeur') primary key,
    matricule varchar(10) not null unique,
    email varchar(50),
    motdepasse varchar(10)
);

create sequence seq_service;
create table if not exists service (
    idService varchar(10) default 'ser'||nextval('seq_service') primary key,
    nom_service varchar(50),
    bool boolean default false
);

create sequence seq_chef;
create table if not exists chef_service (
    idChef_service varchar(10) default 'CHEF'||nextval('seq_chef') primary key,
    matricule varchar(10) not null unique,
    email varchar(50),
    motdepasse varchar(50),
    idService varchar(10) references service(idService)
);

create sequence seq_categorie;
create table if not exists categorie (
    idCategorie varchar(10) default 'CAT00' || nextval('seq_categorie') primary key,
    nom_categorie varchar(50) not null
);

create sequence seq_article;
create table if not exists article (
    idArticle varchar(10) default 'ART00' || nextval('seq_article') primary key,
    nom_article varchar(50) not null,
    idCategorie varchar(10) references categorie(idCategorie)
);

create sequence seq_besoin;
create table if not exists besoin (
    idBesoin varchar(10) default 'BES00' || nextval('seq_besoin') primary key,
    idService varchar(10) references service(idService),
    idarticle varchar(10) references article(idArticle),
    quantite_demander numeric(10,2) not null,
    date_besoin timestamp
);

create table if not exists reponse_directeur(
    idReponse_directeur serial primary key,
    reponse varchar(10),
    date_reponse timestamp,
    idBesoin varchar(10) references besoin(idBesoin)
); 


<<<<<<< HEAD
=======
CREATE TABLE fournisseurs (
    id serial PRIMARY KEY ,
    nom_fournisseur VARCHAR(255),
    contact_responsable VARCHAR(255)
);

>>>>>>> d6bccb383fafa0f0c638c29c09c118b18c87ac99
CREATE TABLE proFormat (
    id serial PRIMARY KEY ,
    idBesoin VARCHAR references besoin(idBesoin),
    idArticle varchar REFERENCES article(idArticle),
    Quantite float,
    Prix_unitaire float,
    Date DATE,
    id_Fournisseur int  REFERENCES fournisseurs(id)
);


-- Table pour les bons de commande
CREATE TABLE bons_de_commande (
    id serial PRIMARY KEY ,
    idBesoin VARCHAR references besoin(idBesoin),
    Prix_unitaire float,
    id_Fournisseur int  REFERENCES fournisseurs(id),
    TVA float  
);

CREATE TABLE FactureAttente (
    id serial PRIMARY KEY ,
    id_Facture INT REFERENCES bons_de_commande(id),
    PrixTTC FLOAT
);
