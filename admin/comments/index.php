<?php 
include("../../path.php");
include("../../app/controllers/commentaries.php");
?>

<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/8346c104dc.js" crossorigin="anonymous"></script>
    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>TechTalk Hub</title>
</head>
<body> 

<?php include("../../app/include/header-admin.php"); ?>

<div class="container">
    <?php include("../../app/include/sidebar-admin.php"); ?>
        <div class="posts col-9">
            <div class="row title-table">
                <h2>Управление комментариями</h2>
                <div class="w-100"></div>
                <div class="col-1">ID</div>
                <div class="col-4">Текст</div>
                <div class="col-4">Автор</div>
                <div class="col-3">Управление</div>
            </div>
            <?php foreach($commentsForAdm as $key => $comment): ?>
                <div class="row post">
                    <div class="id col-1"><?= $comment['id']; ?></div>
                    <div class="title col-4"><?= mb_substr($comment['comment'], 0, 50, 'UTF-8') . '...' ?></div>
                    <?php 
                        $user = $comment['email'];
                        $user = explode('@', $user);
                        $user = $user[0];
                    ?>
                    <div class="author col-4"><?= $user . '@'; ?></div>
                    <div class="red col-1"><a href="edit.php?id=<?= $comment['id']; ?>">edit</a></div>
                    <div class="del col-1"><a href="edit.php?delete_id=<?= $comment['id']; ?>">delete</a></div>
                    <?php if($comment['status']): ?>
                        <div class="status col-1"><a href="edit.php?publish=0&pub_id=<?= $comment['id']; ?>">unpublish</a></div>
                    <?php else: ?>
                        <div class="status col-1"><a href="edit.php?publish=1&pub_id=<?= $comment['id']; ?>">publish</a></div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- footer -->
<?php include("../../app/include/footer.php"); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>