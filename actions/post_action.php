<?php
require '../config.php';
require_once '../models/Post.php';
require_once '../dao/PostDaoMySql.php';

$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
$subtitle = filter_input(INPUT_POST, 'subtitle', FILTER_SANITIZE_SPECIAL_CHARS);
$category = filter_input(INPUT_POST, 'categories', FILTER_SANITIZE_SPECIAL_CHARS);
$img = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_SPECIAL_CHARS);
$body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_SPECIAL_CHARS);

if($title && $subtitle && $category && $body){
    if(isset($_FILES['image'])){
        $extension = explode('.',$_FILES['image']['name']);
        $file_extensions = array('jpg', 'jpeg', 'png');

        if(in_array($extension[1], $file_extensions)){    
            $new_name = md5(time()) . '.' . $extension[1];
            $dir = "../assets/photos/";
            move_uploaded_file($_FILES['image']['tmp_name'], $dir . $new_name);
        } else {
            die("Arquivo não permitido!");
        }
    }
    
    $post = new Post();
    $postDao = new PostDaoMySql($pdo, $base);
    $now =  date('d/m/Y H:i:s');

    $post->title = $title;
    $post->subtitle = $subtitle;
    $post->category = $category;
    $post->body = $body;
    $post->image = $new_name ?? '';

    $postDao->createNewPost($post);

    header("Location:$base/views/pages/index.php");
    exit;
}

header("Location:$base/views/pages/write.php");
exit;

?>