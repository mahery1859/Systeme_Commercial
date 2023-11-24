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
SELECT b.idBesoin, b.idService, b.idArticle, b.quantite_demander, b.date_besoin, r.reponse, r.date_reponse,a.nom_article,s.nom_service
FROM reponse_directeur r
JOIN besoin b ON b.idBesoin = r.idBesoin
JOIN article a ON b.idArticle = a.idArticle
JOIN service s ON b.idService = s.idService;


CREATE OR REPLACE VIEW v_proformat AS
            SELECT
                mouvm.id AS idproFormat,
                mouvm.idarticle AS idarticle,
                p.nom_article AS nom_article,
                quantite,
                mouvm.prix_unitaire AS prix_unitaire,
                date,
                f.nom_fournisseur AS nom_Fourniseur,
                f.id_Fournisseur AS id_Fournisseur
            FROM
                proformat mouvm
            JOIN
                article p ON mouvm.idarticle = p.idarticle
            JOIN
                fournisseurs f ON mouvm.id_fournisseur = f.id
        ;
