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

<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>
                    <a href="#">TechTalk Hub</a>
                </h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Услуги</a></li>

                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i>
                            Кабинет
                        </a>
                        <ul>
                            <li><a href="#">Админ панель</a></li>
                            <li><a href="#">Выход</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- END HEADER-->
<!-- FORM -->
<div class="container reg_form">
    <h2 class="col-12">Авторизация</h2>
    <form class="row justify-content-center" method="post" action="log.html">
        <div class="mb-3 col-12 col-md-4">
            <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите ваш логин...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите ваш пароль...">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <button type="button" class="btn btn-secondary">Войти</button>
            <a href="aut.html">Зарегистрироваться</a>
        </div>
    </form>
</div>
<!-- END FORM-->

<!-- footer -->
<div class="footer container-fluid">
    <div class="footer-content container">
        <div class="row">
            <div class="footer-section about col-md-4 col-12">
                <h3 class="logo-text">Блог</h3>
                <p>
                    Блог - это блог сделанный с целью обучения.
                </p>
                <div class="contact">
                    <span><i class="fas fa-phone"></i>&nbsp; 89001112233</span>
                    <span><i class="fas fa-envelope"></i>&nbsp; info@techtalk.com</span>
                </div>
                <div class="socials">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-section links col-md-4 col-12">
                <h3>Quick Links</h3>
                <br>
                <ul>
                    <a href="#">
                        <li>События</li>
                    </a>
                    <a href="#">
                        <li>Команда</li>
                    </a>
                    <a href="#">
                        <li>Упражнения</li>
                    </a>
                    <a href="#">
                        <li>Галлерея</li>
                    </a>
                    <a href="#">
                        <li>Что-то еще</li>
                    </a>
                </ul>
            </div>

            <div class="footer-section contact-form col-md-4 col-12">
                <h3>Контакты</h3>
                <br>
                <form action="index.html" method="post">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
                    <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
                    <button type="submit" class="bth bth-big contact-btn">
                        <i class="fas fa-envelope"></i>
                        Отправить
                    </button>
                </form>
            </div>

        </div>

        <div class="footer-bottom">
            &copy; techtalkhub.com
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>