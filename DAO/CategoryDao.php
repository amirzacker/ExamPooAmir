<?php
class CategoryDao
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
     
        $sth = $this->dbh->prepare("SELECT * FROM category");
        $sth->execute();
        $results = $sth->fetchAll(PDO::FETCH_ASSOC);

// Utilisation de la class Article
        require_once '../Model/Category.php';

        foreach ($results as $key => $category) {
            $results[$key] = (new Category())
                ->setId_category($category['id_category'])
                ->setName_category($category['name_category']);
                
        }

        return $results;
    }


   
    public function getById(int $id): Produit
    {
  

        $sth = $this->dbh->prepare("SELECT * FROM produit WHERE id_produit = :id");
        $sth->bindValue(":id",$id);
        $sth->execute();
        require_once '../Model/Produit.php';
        $produit = $sth->fetchObject(Article::class);
        return $produit;
       
    }
    public function getByIdCategory(int $id_category,int $id_produit): Produit
    {
  

        $sth = $this->dbh->prepare("SELECT * FROM produit WHERE id_produit = :id_produit AND id_category = :id_category ");
        $sth->bindValue(":id_category",$id_category);
        $sth->bindValue(":id_produit",$id_produit);
        $sth->execute();
        require_once '../Model/Produit.php';
        $produit = $sth->fetchObject(Article::class);
        return $produit;
       
    }

    // public function add(Article $article): void
    // {
    

    //     $requete = $this->dbh->prepare("INSERT INTO `article` (`title`, `description`) VALUES (:title, :description)");
    //     $requete->bindValue(":title",$article->getTitle(),PDO::PARAM_STR);
    //     $requete->bindValue(":description",$article->getDescription(),PDO::PARAM_STR);
    //     $requete->execute(); 
        
    //     if($requete){
    //         echo "merci d'avoir ajouter un article";
    //         header('location:home_controller.php');
    //     }
    //     else{
    //         echo "echec de requete sql";
    //     }
        

    // }



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
