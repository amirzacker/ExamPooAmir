<?php
class ProduitDao
{
    private PDO $dbh;

    
    public function __construct() {
           // Instruction qui permet de récupérer les données dans la base de donnée poo_wf3
           $this->dbh = new PDO(
            "mysql:host=localhost;dbname=revision_poo;charset=UTF8",
            "root",
            "", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ]
        );
    }
    
    public function getAll()
    {
     
        $sth = $this->dbh->prepare("SELECT * FROM produit ORDER  BY id_produit DESC");
        $sth->execute();
        $results = $sth->fetchAll(PDO::FETCH_ASSOC);

// Utilisation de la class Article
        require_once '../Model/Produit.php';

        foreach ($results as $key => $produit) {
            $results[$key] = (new Produit())
                ->setId_produit($produit['id_produit'])
                ->setTitle($produit['title'])
                ->setDescription($produit['description'])
                ->setPrice($produit['price'])
                ->setId_category($produit['id_category']);
        }

        return $results;
    }
    public function getByIdFiltre(int $id_category)
    {
  

        $sth = $this->dbh->prepare("SELECT * FROM `produit` WHERE id_category  = $id_category ");
        $sth->execute();
        $results = $sth->fetchAll(PDO::FETCH_ASSOC);
        require_once '../Model/Produit.php';
        foreach ($results as $key => $produit) {
            $results[$key] = (new Produit())
                ->setId_produit($produit['id_produit'])
                ->setTitle($produit['title'])
                ->setDescription($produit['description'])
                ->setPrice($produit['price'])
                ->setId_category($produit['id_category']);
        }

        return $results;
       
    }


   
    // public function getById(int $id): Article
    // {
  

    //     $sth = $this->dbh->prepare("SELECT * FROM article WHERE id_article = :id");
    //     $sth->bindValue(":id",$id);
    //     $sth->execute();
    //     require_once '../Model/Article.php';
    //     $article = $sth->fetchObject(Article::class);
    //     return $article;
       
    // }

    public function add(Produit $produit): void
    {
    

        $requete = $this->dbh->prepare("INSERT INTO `produit` (`title`, `description`,`price`, `id_category`) VALUES (:title, :description,:price, :id_category)");
        $requete->bindValue(":title",$produit->getTitle(),PDO::PARAM_STR);
        $requete->bindValue(":description",$produit->getDescription(),PDO::PARAM_STR);
        $requete->bindValue(":price",$produit->getPrice(),PDO::PARAM_STR);
        $requete->bindValue(":id_category",$produit->getId_category(),PDO::PARAM_STR);
        $requete->execute(); 
        
        if($requete){
            echo "merci d'avoir ajouter un produit";
            header('location:home_controller.php');
        }
        else{
            echo "echec de requete sql";
        }
        

    }



    // public function edit(Article $article):void
    // {
   

        

    // /*     $requete = $dbh->prepare("UPDATE `article` SET (`title`, `description`) VALUES (:title, :description)"); */
    //     $requete = $this->dbh->prepare("UPDATE `article` SET `title` = :title,`created_at` = current_timestamp(), `description` = :description WHERE id_article = :id");
    //     $requete->bindValue(":id",$article->getIdArticle());
    //     $requete->bindValue(":title",$article->getTitle(),PDO::PARAM_STR);
    //     $requete->bindValue(":description",$article->getDescription(),PDO::PARAM_STR);
    //     $requete->execute();
        
    //     if($requete){
    //         echo "merci d'avoir modifier un article";
    //         header('location:home_controller.php');
    //     }
    //     else{
    //         echo "echec de requete sql";
    //     }
        

    // }


    // public function delet(int $id): void
    // {
    //     // Instruction qui permet de récupérer les données dans la base de donnée poo_wf3
    

        

    // /*     $requete = $dbh->prepare("UPDATE `article` SET (`title`, `description`) VALUES (:title, :description)"); */
    //     $requete = $this->dbh->prepare("DELETE FROM `article` WHERE `article`.`id_article` = :id");
    //     $requete->bindValue(":id",$id);
    //     $requete->execute();
        
    //     if($requete){
    //         header('location:home_controller.php');
    //     }
    //     else{
    //         echo "echec de requete sql";
    //     }
        

    // }
}
