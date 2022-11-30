<?php
class Post{
    public int $id;
    public string $title;
    public string $subtitle;
    public string $category;
    public string $created_at;
    public string $creator;
    public string $body;
    public string $image;
}

interface PostDao{
    public function getAllPosts();
    public function getPostById(int $id);
    public function createNewPost(Post $p);
}   