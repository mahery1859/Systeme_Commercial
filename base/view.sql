create or replace view v_demandeAchat as 
select bes.quantite_demander, art.nom_article, cat.nom_categorie, ser.nom_service, bes.date_besoin, bes.idBesoin
    from besoin as bes
    join service as ser on ser.idService = bes.idService
    join article as art on art.idArticle = bes.idArticle
    join categorie as cat on cat.idCategorie = art.idCategorie;    

create or replace view v_article as 
select art.*, cat.nom_categorie
    from article as art
    join categorie as cat on cat.idCategorie = art.idCategorie;

create or replace view v_historique as
select dem.*, repDir.date_reponse, repDir.reponse
    from reponse_directeur as repDir
    join v_demandeAchat as dem on dem.idbesoin = repDir.idbesoin;

CREATE OR REPLACE VIEW v_besoinConfirmer AS
SELECT b.idBesoin as idBesoin, b.idService, b.idArticle, b.quantite_demander, b.date_besoin, r.reponse, r.date_reponse,a.nom_article,s.nom_service
FROM reponse_directeur r
JOIN besoin b ON b.idBesoin = r.idBesoin
JOIN article a ON b.idArticle = a.idArticle
JOIN service s ON b.idService = s.idService;


CREATE OR REPLACE VIEW v_proformat AS
            SELECT
                mouvm.id AS idproFormat,
                mouvm.idarticle AS idarticle,
                mouvm.idBesoin AS idBesoin,
                p.nom_article AS nom_article,
                mouvm.prix_unitaire AS prix_unitaire,
                date,
                f.nom_fournisseur AS nom_Fourniseur,
                f.id AS id_Fournisseur
            FROM
                proformat mouvm
            JOIN
                article p ON mouvm.idarticle = p.idarticle
            JOIN
                fournisseurs f ON mouvm.id_fournisseur = f.id
            JOIN
                besoin b ON mouvm.idBesoin = b.idBesoin
        ;
      

CREATE OR REPLACE VIEW v_proformatdetails AS
            SELECT
                mouvm.id AS idproFormat,
                mouvm.idarticle AS idarticle,
                mouvm.idBesoin AS idBesoin,
                p.nom_article AS nom_article,
                mouvm.prix_unitaire AS prix_unitaire,
                date,
                f.nom_fournisseur AS nom_Fourniseur,
                f.id AS id_Fournisseur,
                f.nom_fournisseur,
                b.idservice 
            FROM
                proformat mouvm
            JOIN
                article p ON mouvm.idarticle = p.idarticle
            JOIN
                fournisseurs f ON mouvm.id_fournisseur = f.id
            JOIN
                besoin b ON mouvm.idBesoin = b.idBesoin
        ;

CREATE OR REPLACE VIEW v_courrier_fournisseurs AS
            SELECT
                cfour.details,
                b.idBesoin, 
                b.idService, 
                b.idArticle, 
                b.quantite_demander,
                b.date_besoin, 
                r.reponse, 
                r.date_reponse,
                a.nom_article,
                s.nom_service,
                cfour.id_Fournisseur as id_fournisseur

FROM courrier_fournisseurs cfour                
JOIN 
besoin b ON b.idBesoin = cfour.details
JOIN 
reponse_directeur r ON b.idBesoin = r.idBesoin
JOIN 
article a ON b.idArticle = a.idArticle
JOIN 
service s ON b.idService = s.idService
;


CREATE OR REPLACE VIEW v_boncommande as 
            SELECT
                mouvm.id ,
                s.nom_service,
                b.idservice,
                a.nom_article,
                b.idarticle,
                f.nom_fournisseur AS nom_fournisseur,
                f.id AS id_fournisseur,
                mouvm.prix_unitaire,
                mouvm.tva,
                mouvm.date,
                b.quantite_demander

            FROM
                bons_de_commande mouvm
            JOIN
                fournisseurs f ON mouvm.id_fournisseur = f.id
            JOIN
                besoin b ON mouvm.idbesoin = b.idBesoin
            JOIN 
                service s ON s.idservice = b.idservice
            JOIN 
                article a ON a.idarticle = b.idarticle
        ;

        CREATE OR REPLACE VIEW v_detailsfacture as 
            SELECT
                mouvm.id ,
                s.nom_service,
                b.idservice,
                a.nom_article,
                b.idarticle,
                f.nom_fournisseur AS nom_fournisseur,
                f.id AS id_fournisseur,
                mouvm.prix_unitaire,
                mouvm.tva,
                mouvm.date,
                b.quantite_demander,
                fact.prixttc
            FROM
                factureattente fact
            JOIN
                bons_de_commande mouvm ON  fact.id_facture = mouvm.id
            JOIN
                fournisseurs f ON mouvm.id_fournisseur = f.id
            JOIN
                besoin b ON mouvm.idbesoin = b.idBesoin
            JOIN 
                service s ON s.idservice = b.idservice
            JOIN 
                article a ON a.idarticle = b.idarticle
        ;

     CREATE OR REPLACE VIEW v_financehistory as
                 SELECT
                mouvm.id ,
                s.nom_service,
                b.idservice,
                a.nom_article,
                b.idarticle,
                f.nom_fournisseur AS nom_fournisseur,
                f.id AS id_fournisseur,
                mouvm.prix_unitaire,
                mouvm.tva,
                mouvm.date,
                b.quantite_demander,
                hf.prixttc
            FROM 
                historiquefinance hf     
            JOIN
                bons_de_commande mouvm ON  hf.id_facture = mouvm.id
            JOIN
                fournisseurs f ON mouvm.id_fournisseur = f.id
            JOIN
                besoin b ON mouvm.idbesoin = b.idBesoin
            JOIN 
                service s ON s.idservice = b.idservice
            JOIN 
                article a ON a.idarticle = b.idarticle
        ;