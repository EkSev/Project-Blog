<?php 
session_start();
include("../../path.php");
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
    <div class="row">
        <div class="sidebar col-3">
            <ul>
                <li>
                    <a href="#">Записи</a>
                </li>
                <li>
                    <a href="#">Пользователи</a>
                </li>
                <li>
                    <a href="#">Категории</a>
                </li>
            </ul>
        </div>
        <div class="posts col-9">
            <div class="button row">
                <a href="create.html" class="col-2 btn btn-success">Создать</a>
                <span class="col-1"></span>
                <a href="index.html" class="col-3 btn btn-warning">Управление</a>
            </div>
            <div class="row title-table">
                <h2>Создать пользователя</h2>
            </div>
            <div class="row add-post">
                <form action="create.php" method="post">
                    <div class="col">
                        <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
                        <input name="login" value="" type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите ваш логин...">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input name="mail" value="" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите ваш email...">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите ваш пароль...">
                    </div>
                    <div class="col">
                        <label for="exampleInputPassword2" class="form-label">Повторите пароль</label>
                        <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2" placeholder="Повторите ваш пароль...">
                    </div>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>User</option>
                        <option value="1">Admin</option>
                    </select>
                    <div class="col">
                        <button class="btn btn-primary" type="submit">Создать</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include("../../app/include/footer.php"); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>