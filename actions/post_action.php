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
    $post = new Post();
    $postDao = new PostDaoMySql($pdo, $base);
    $now =  date('d/m/Y H:i:s');

    $post->title = $title;
    $post->subtitle = $subtitle;
    $post->category = $category;
    $post->body = $body;
    $post->image = $img;

    $postDao->createNewPost($post);

    header("Location:$base/views/pages/index.php");
    exit;
}

header("Location:$base/views/pages/write.php");
exit;

?>