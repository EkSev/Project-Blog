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

<!--блок карусели START-->
<div class="container">
    <div class="row">
        <h2 class="slider-title">Топ публикации</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/image_1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5><a href="#">First slide label</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/image_2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5><a href="#">First slide label</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/image_3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5><a href="#">First slide label</a></h5>
                </div>
            </div>
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

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/image_small.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Интересная статья на тему...</a>
                    </h3>
                    <i class="far fa-user">Имя Автора</i>
                    <i class="far fa-calendar">April 19, 2023</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur, adipiscing elit. 
                        Exercitationem optio possimus in Inventure Maxime Laborum.
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/image_small.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Интересная статья на тему...</a>
                    </h3>
                    <i class="far fa-user">Имя Автора</i>
                    <i class="far fa-calendar">April 19, 2023</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur, adipiscing elit. 
                        Exercitationem optio possimus in Inventure Maxime Laborum.
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/image_small.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Интересная статья на тему...</a>
                    </h3>
                    <i class="far fa-user">Имя Автора</i>
                    <i class="far fa-calendar">April 19, 2023</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur, adipiscing elit. 
                        Exercitationem optio possimus in Inventure Maxime Laborum.
                    </p>
                </div>
            </div>
        </div>
        <!-- sidebar Content-->
        <div class="sidebar col-md-3 col-12">

            <div class="section search">
                <h3>Поиск</h3>
                <form action="#" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово...">
                </form>
            </div>

            <div class="section topics">
                <h3>Категории</h3>
                <ul>
                    <li><a href="#">Программирование</a></li>
                    <li><a href="#">Дизайн</a></li>
                    <li><a href="#">Визуализация</a></li>
                    <li><a href="#">Кейсы</a></li>
                    <li><a href="#">Мотивация</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--блок main END-->

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