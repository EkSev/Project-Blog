<?php 
include("path.php"); 
include("app/controllers/topics.php");
$post = selectPostFromPostsWithUsersOnSingle('posts', 'users', $_GET['post']);
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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>TechTalk Hub</title>
</head>
<body> 

<?php include("app/include/header.php"); ?>

<!--блок main-->
<div class="container">
    <div class="content row">
        <!--Main Content-->
        <div class="main-content col-md-9 col-12">
            <h2><?= $post['title']; ?></h2>

            <div class=" single_post row">
                <div class="img col-12">
                    <img src="<?= BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="<?= $post['title'] ?>" class="img-thumbnail">
                </div>
                <div class="info">
                    <i class="far fa-user"> <?= $post['username']; ?></i>
                    <i class="far fa-calendar"> <?= $post['created_date']; ?></i>
                </div>
                <div class="single_post_text col-12">
                <?= $post['content']; ?>
                </div>
                <!-- Комментарии -->
                <?php include("app/include/comments.php"); ?>
            </div>
            
        </div>
        <!-- sidebar Content-->
        <div class="sidebar col-md-3 col-12">

            <div class="section search-single">
                <h3>Поиск</h3>
                <form action="search.php" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово...">
                </form>
            </div>

            <div class="section topics">
                <h3>Категории</h3>
                <ul>
                    <?php foreach($topics as $key => $topic): ?>
                    <li>
                        <a href="<?= BASE_URL . 'category.php?id=' . $topic['id']; ?>"><?= $topic['name']; ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--блок main END-->

<!-- footer -->
<?php include("app/include/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>