<?php
// контроллер
include_once(SITE_ROOT . "/app/database/db.php");
$commentsForAdm = selectAll('comments');

$page = isset($_GET['post']) ? $_GET['post'] : null;
$email = '';
$comment = '';
$errMsg = [];
$status = 0;
$comments = [];

// Код для формы создания комментария
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['goComment'])){
    $email = trim($_POST['email']);
    $comment = trim($_POST['comment']);

    if($email === '' || $comment === ''){
        array_push($errMsg, "Не все поля заполнены!");
    }elseif (mb_strlen($comment , 'UTF8') < 3){
        array_push($errMsg, "Комментарий должен быть более 3-х символов!");
    }else{
        $user = selectOne('users', ['email' => $email]);
        if (!empty($user['email']) && $user['email'] === $email){
            $status = 1;
        }else{
            array_push($errMsg, "Комментраии незарегистрированных пользователей проходят модерацию админом!");
        }

        $comment = [
            'status' => $status,
            'page' => $page,
            'email' => $email,
            'comment' => $comment
        ];

        $comment = insert('comments', $comment);
        $comments = selectAll('comments', ['page' => $page, 'status' => 1]);
    }
    $comments = selectAll('comments', ['page' => $page, 'status' => 1]);
}else{
    $email = '';
    $comment = '';
    $comments = selectAll('comments', ['page' => $page, 'status' => 1]);
}


// Удаление комментария
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
    delete('comments', $id);
    header('location: ' . BASE_URL . 'admin/comments/index.php');
}

// Статус publish or unpublish
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['pub_id'])){
    $id = $_GET['pub_id'];
    $publish = $_GET['publish'];

    $postId = update('comments', $id, ['status' => $publish]);

    header('location: ' . BASE_URL . 'admin/comments/index.php');
    exit();
}

// Апдейт комментария
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    $comment = selectOne('comments', ['id' => $_GET['id']]);

    $id = $comment['id'];
    $email = $comment['email'];
    $text1 = $comment['comment'];
    $pub = $comment['status'];

}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_comment'])){
    $id = $_POST['id'];
    $text = trim($_POST['content']);
    $publish = isset($_POST['publish']) ? 1 : 0;

    if($text === ''){
        array_push($errMsg, "Комментарий не имеет содержимого текста!");
    }elseif (mb_strlen($text, 'UTF8') < 3){
        array_push($errMsg, "В комментарии должно быть более 3-х символов!");
    }else{
        $com = [
            'comment' => $text,
            'status' => $publish,
        ];
        $comment = update('comments', $id, $com);
        header('location: ' . BASE_URL . 'admin/comments/index.php');
    }
}else{
    $publish = isset($_POST['publish']) ? 1 : 0;
}

