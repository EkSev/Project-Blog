<?php 
include("../../path.php");
include("../../app/controllers/posts.php"); 
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
            <div class="button row">
                <a href="<?php echo BASE_URL . "admin/posts/create.php"; ?>" class="col-2 btn btn-success">Создать</a>
                <span class="col-1"></span>
                <a href="<?php echo BASE_URL . "admin/posts/index.php"; ?>" class="col-3 btn btn-warning">Редактировать</a>
            </div>
            <div class="row title-table">
                <h2>Управление записями</h2>
                <div class="w-100"></div>
                <div class="col-1">ID</div>
                <div class="col-5">Название</div>
                <div class="col-2">Автор</div>
                <div class="col-4">Управление</div>
            </div>
            <?php foreach($postsAdm as $key => $post): ?>
                <div class="row post">
                    <div class="id col-1"><?= $key + 1; ?></div>
                    <div class="title col-5"><?= mb_substr($post['title'], 0, 50, 'UTF-8') . '...' ?></div>
                    <div class="author col-2"><?= $post['username']; ?></div>
                    <div class="red col-1"><a href="edit.php?id=<?= $post['id']; ?>">edit</a></div>
                    <div class="del col-1"><a href="edit.php?delete_id=<?= $post['id']; ?>">delete</a></div>
                    <?php if($post['status']): ?>
                        <div class="status col-2"><a href="edit.php?publish=0&pub_id=<?= $post['id']; ?>">unpublish</a></div>
                    <?php else: ?>
                        <div class="status col-2"><a href="edit.php?publish=1&pub_id=<?= $post['id']; ?>">publish</a></div>
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