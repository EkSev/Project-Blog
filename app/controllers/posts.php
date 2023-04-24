<?php
include(SITE_ROOT . "/app/database/db.php");

$errMsg = '';
$id = '';
$title = '';
$content = '';
$img = '';
$topic = '';

$topics = selectAll('topics');
$posts = selectAll('posts');
$postsAdm = selectAllFromPostsWithUsers('posts', 'users');

// Код для формы создания записи
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_post'])){

    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $topic = trim($_POST['topic']);

    $publish = isset($_POST['publish']) ? 1 : 0;

    if($title === '' || $content === '' || $topic === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($title, 'UTF8') < 7){
        $errMsg = "Название статьи должно быть более 7-х символов!";
    }else{
        $post = [
            'id_user' => $_SESSION['id'],
            'title' => $title,
            'content' => $content,
            'img' => $_POST['img'],
            'status' => $publish,
            'id_topic' => $topic
        ];
        $post = insert('posts', $post);
        $post = selectOne('posts', ['id' => $id]);
        header('location: ' . BASE_URL . 'admin/posts/index.php');
    }
}else{
    $title = '';
    $content = '';
}
