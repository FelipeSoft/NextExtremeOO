<?php
require_once __DIR__.'../../config.php';
require_once __DIR__.'../../models/Post.php';

class PostDaoMySql implements PostDao{
    private PDO $pdo;
    private string $base;

    public function __construct($pdo, $base){
        $this->pdo = $pdo;
        $this->base = $base;
    }

    public function getAllPosts(){
        $sql = $this->pdo->query("SELECT * FROM tb_posts");
        if($sql->rowCount() > 0){
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
        return [];
    }

    public function getPostById(int $id){

    }

    public function createNewPost(Post $p){
        $sql = $this->pdo->prepare("INSERT INTO tb_posts (title, subtitle, category, created_at, body, image) VALUES (:title, :subtitle, :category,  NOW(), :body, :image);");
        $sql->bindValue(":title", $p->title);
        $sql->bindValue(":subtitle", $p->subtitle);
        $sql->bindValue(":category", $p->category);
        $sql->bindValue(":body", $p->body);
        $sql->bindValue(":image", $p->image);
        $sql->execute();
    }

}