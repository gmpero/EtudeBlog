<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/6d9064c383.js" crossorigin="anonymous"></script>
    <!-- Custom style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Rubik:wght@400;700&family=Tinos:wght@400;700&display=swap" rel="stylesheet">
    <title>Etude blog</title>
  </head>
  <body>
	<!-- header -->
    <header class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h1>
                        <a href="/">Etude blog</a>
                    </h1>
                </div>
                <nav class="col-8">
                    <ul>
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Услуги</a></li>
                        
                        <li>
                            <a href="#">
                                <i class="fa-solid fa-user"></i>
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
    <!-- END HEADER -->

    <!-- FORM -->
    <div class="container reg_form">
        <form class="row justify-content-center" method="post" action="log.html">
            <h2>Форма Авторизации</h2>
            <div class="form-group col-12 col-md-4 mb-3">
                <label for="formGroupExampleInput">Логин</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите Ваш логин">
            </div>
            <div class="min-vw-100"></div>
            <div class="form-group col-12 col-md-4 mb-3">
              <label for="exampleInputPassword1">Пароль</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="min-vw-100"></div>
            <div class="col-6 col-md-4 mb-3">
                <button type="submit" class="btn btn-secondary">Войти</button>
                <a href="reg.html">Регистрация</a>
            </div>
          </form>
    </div>
    <!-- END FORM -->
    
    <!-- footer START -->
    <div class="footer container-fluid">
        <div class="footer-content container">
            <div class="row">
                <div class="footer-section about col-md-4 col-12">
                    <h3 class="logo-text">Etude</h3>
                    <p>
                        Добро пожаловать на наш сайт для садоводов и огородников! 
                        В нашем хозяйстве уже более 30 лет производятся испытания и 
                        отбор лучших сортов овощей, винограда, плодовых.
                    </p>
                    <!-- <div class="contacts">
                        <span><i class="fas fa-phone">8-800-555-35-35</i></span>
                        <span><i class="fas fa-envelope">info@mail.ru</i></span>
                        <span></span>
                    </div>
                    <div class="socials">
                        <a href="#"><i class="fa-brands fa-odnoklassniki">Однокласники</i></a>
                        <a href="#"><i class="fa-brands fa-vk">ВКонтакте</i></a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </div> -->
                </div>

                <div class="footer-section links col-md-4 col-12">
                    <h3>Quick links</h3>
                    <div class="contacts">
                        <span><i class="fa fa-phone"></i> 8-800-555-35-35</span>
                        <span><i class="fa fa-envelope"></i> info@mail.ru</span>
                        <span></span>
                    </div>
                    <div class="socials">
                        <h4>Соц Сети</h4>
                        <span><a href="#"><i class="fa-brands fa-odnoklassniki"></i> Однокласники</a></span>
                        <span><a href="#"><i class="fa-brands fa-vk"></i> ВКонтакте</a></span>
                        <!-- <a href="#"></a>
                        <a href="#"></a> -->
                    </div>
                </div>

                <div class="footer-section contact-form col-md-4 col-12">
                    <h3>Контакты</h3>
                    <form action="index.html" method="post">
                        <input type="email" name="email" class="text-input contact-input" placeholder="Введите Вашу почту">
                        <textarea rows="4" name="message" class="text-input contact-input" placeholder="Введите Ваш заказ или сообщение"></textarea>
                        <button type="submit" class="btn btn-light contact-btn">
                            <i class="fas fa-envelope"></i>
                            Отправить
                        </button>
                    </form>
                </div>
            </div>

            <div class="footer-bottom">
                EtudeBlog.com | design by gmpero
            </div>
        </div>
    </div>

    <!-- footer END -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 </body>
</html>
