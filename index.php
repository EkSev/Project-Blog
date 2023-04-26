<?php 
include("path.php"); 
include("app/controllers/topics.php");
$posts = selectAllFromPostsWithUsersOnIndex('posts','users');
$topTopic = selectTopTopicFromPostsOnIndex('posts');
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

<!--блок карусели START-->
<div class="container">
    <div class="row">
        <h2 class="slider-title">Топ публикации</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide">
         
        <div class="carousel-inner">
            <?php foreach($topTopic as $key => $post): ?> 
                <?php if($key == 0): ?>
                    <div class="carousel-item active">
                <?php else: ?>
                    <div class="carousel-item">
                <?php endif; ?>
                    <img src="<?= BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="<?= $post['title'] ?>" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                    <h5><a href="<?= BASE_URL . 'single.php?post=' . $post['id']; ?>"><?= substr($post['title'], 0, 80) . '...' ?></a></h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!--блок карусели END-->

<!--блок main-->
<div class="container">
    <div class="content row">
        <!--Main Content-->
        <div class="main-content col-md-9 col-12">
            <h2>Последние публикации</h2>
            <?php foreach($posts as $post): ?>  
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="<?= BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="<?= $post['title'] ?>" class="img-thumbnail">
                    </div>
                    <div class="post_text col-12 col-md-8">
                        <h3>
                            <a href="<?= BASE_URL . 'single.php?post=' . $post['id']; ?>"><?= substr($post['title'], 0, 80) . '...' ?></a>
                        </h3>
                        <i class="far fa-user"> <?= $post['username']; ?></i>
                        <i class="far fa-calendar"> <?= $post['created_date']; ?></i>
                        <p class="preview-text">
                            <?= mb_substr($post['content'], 0, 140, 'UTF-8') . '...' ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- sidebar Content-->
        <div class="sidebar col-md-3 col-12">

            <div class="section search">
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
                        <a href="#"><?= $topic['name']; ?></a>
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