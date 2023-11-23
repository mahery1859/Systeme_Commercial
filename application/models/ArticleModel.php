<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArticleModel extends CI_Model {
    public function categories() {
        $sql = "select * from categorie";
        $result = $this->db->query($sql);

        return $result->result_array();
    }

    public function save($nom_article, $idCategorie) {
        $sql = "insert into article values (default, '%s', '%s')";
        $sql = sprintf($sql, $nom_article, $idCategorie);

        $this->db->query($sql);
    }

    public function findall() {
        $sql = "select * from article";
        $result = $this->db->query($sql);

        return $result->result_array();
    }

    public function getArticleWithCategory() {
        $sql = "select * from v_article";
        $result = $this->db->query($sql);

        return $result->result_array();
    }

    public function delete($idArticle) {
        $sql = "delete from article where idarticle = '%s'";
        $sql = sprintf($sql, $idArticle);

        $this->db->query($sql);
    }

    public function update($nom, $idArticle) {
        $sql = "update article set nom_article = '%s' where idarticle = '%s'";
        $sql = sprintf($sql, $nom, $idArticle);

        $this->db->query($sql);
    }
}       
?>