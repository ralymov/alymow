<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description"
              content="Сайт web-разработчика Алымов Романа. Профессиональная разработка web-приложений на PHP, Laravel, VueJS">
        <meta name="keywords" content="PHP,Laravel,VueJS,JavaScript,HTML,CSS">
        <meta name="author" content="Роман Алымов">
        <title>Создание и оптимизация web-приложений на PHP, Laravel, VueJS</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono|Inconsolata" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
              integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>

    <body>

        <!--Main menu-->
        <div class="menu">
            <div class="container">
                <div class="row">
                    <div class="menu__wrapper d-none d-lg-block col-md-12">
                        <nav>
                            <ul>
                                <li><a href="#hello">О себе</a></li>
                                <li><a href="#resume">Резюме</a></li>
                                <!--<li><a href="#portfolio">Портфолио</a></li>-->
                                <!--<li><a href="#testimonials">Отзывы</a></li>-->
                                <!--<li><a href="#blog">Блог</a></li>-->
                                <li><a href="#contact">Контакты</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="menu__wrapper col-md-12 d-lg-none">
                        <button type="button" class="menu__mobile-button">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--Main menu-->

        <!-- Mobile menu -->
        <div class="mobile-menu d-lg-none">
            <div class="container">
                <div class="mobile-menu__close">
                    <span><i class="fas fa-times"></i></span>
                </div>
                <nav class="mobile-menu__wrapper">
                    <ul>
                        <li><a href="#hello">О себе</a></li>
                        <li><a href="#resume">Резюме</a></li>
                        <!--<li><a href="#portfolio">Портфолио</a></li>-->
                        <!--<li><a href="#testimonials">Отзывы</a></li>-->
                        <!--<li><a href="#blog">Блог</a></li>-->
                        <li><a href="#contact">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Mobile menu -->

        <!--Header-->
        <header class="main-header">
            <div class="container">
                <div class="row personal-profile">
                    <div class="col-md-4 personal-profile__avatar">
                        <img src="img/img_avatar.jpg" alt="avatar">
                    </div>
                    <div class="col-md-8">
                        <p class="personal-profile__name">Алымов Роман_</p>
                        <p class="personal-profile__work">Backend-разработчик</p>
                        <div class="personal-profile__contacts">
                            <dl class="contact-list contact-list__opacity-titles">
                                <dt>Возраст:</dt>
                                <dd>22</dd>
                                <dt>Телефон:</dt>
                                <dd><a href="tel:82344563333">8 (967) 826-07-18</a></dd>
                                <dt>Email:</dt>
                                <dd><a href="mailto:romanalym@gmail.com">romanalym@gmail.com</a></dd>
                                <dt>Адрес:</dt>
                                <dd>Россия, Астраханская область, г. Астрахань</dd>
                            </dl>
                        </div>
                        <p class="personal-profile__social">
                            <a href="https://github.com/R-Alymov" target="_blank"><i class="fab fa-github"></i></a>
                            <a href="https://www.linkedin.com/in/%D1%80%D0%BE%D0%BC%D0%B0%D0%BD-%D0%B0%D0%BB%D1%8B%D0%BC%D0%BE%D0%B2-a941b1110/"
                               target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a href="https://t.me/ralymov" target="_blank"><i class="fab fa-telegram"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </header>
        <!--Header-->

        <!--Hello-->
        <section id="hello" class="container section">
            <div class="row">
                <div class="col-md-10">
                    <h2 id="hello_header" class="section__title" style="text-indent: 0;">О себе_</h2>
                    <p class="section__description">
                        Интересуюсь web-разработкой в любом её виде. Специализируюсь на backend разработке.<br>
                        Готов к работе в команде и индивидуально. Коммуникабелен, стрессоустойчив.<br>
                        В наличии желание постоянно изучать что-то новое и неизвестное. <br>
                        Есть интересные проекты? Пишите!
                    </p>
                    <a href="uploads/alymov-resume.pdf" target="_blank" class="section_btn site-btn">
                        <img src="img/img_btn_icon.png" alt="resume">Скачать резюме
                    </a>
                </div>
            </div>
        </section>
        <!--Hello-->

        <hr>

        <!--Resume-->
        <section id="resume" class="container section">
            <div class="row">
                <div class="col-md-10">
                    <h2 id="resume_header" class="section__title" style="text-indent: 0;">Резюме_</h2>
                    <p class="section__description">
                        За свою трудовую деятельность я узнал много нового, ведь прогресс в ИТ-отрасли никогда не стоит на месте, и в
                        частности этим меня привлекает web-разработка, любой сайт или web-приложение всегда можно улучшить, сделать
                        красивее, удобнее, заставить его работать эффективнее. Использование различных подходов и новых технологий
                        позволяет мне постоянно расширять свой профессиональный кругозор, оставаясь в курсе современных web-технологий.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 section__resume resume-list">
                    <h3 class="resume-list_title">Образование</h3>
                    <div class="resume-list__block">
                        <p class="resume-list__block-title">Астраханский государственный технический университет</p>
                        <p class="resume-list__block-date">2017 - по настоящее время</p>
                        <p>
                            Магистратура, направление подготовки "Информационное и программное обеспечение автоматизированных систем".
                        </p>
                    </div>
                    <div class="resume-list__block">
                        <p class="resume-list__block-title">Астраханский государственный технический университет</p>
                        <p class="resume-list__block-date">2013 - 2017</p>
                        <p>
                            Бакалавриат, направление подготовки "Информационная безопасность компьютерных систем".
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 section__resume resume-list">
                    <h3 class="resume-list_title">Работа</h3>
                    <div class="resume-list__block">
                        <p class="resume-list__block-title">Webmechanic</p>
                        <p class="resume-list__block-date">2017 - по настоящее время</p>
                        <p>
                            <b>Web-разработчик</b><br>
                            Разработка и поддержка сайтов и внутренних CRM систем
                        </p>
                    </div>
                    <div class="resume-list__block">
                        <p class="resume-list__block-title">Астраханский государственный технический университет</p>
                        <p class="resume-list__block-date">2015 - 2017</p>
                        <p>
                            <b>Специалист по защите информации</b><br>
                            Работа с базой данных MS-SQL, настройка и сопровождения СЗИ VipNet
                        </p>
                    </div>
                </div>
            </div>
            <div class="row section__resume progress-list js-progress-list">
                <div class="col-md-12">
                    <h3 class="progress-list__title">Навыки</h3>
                </div>
                <div class="col-md-5 mr-auto">
                    <div class="progress-list__skill">
                        <p>
                            <span class="progress-list__skill-title">PHP</span>
                            <span class="progress-list__skill-value">85%</span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-list__skill">
                        <p>
                            <span class="progress-list__skill-title">Laravel</span>
                            <span class="progress-list__skill-value">85%</span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-list__skill">
                        <p>
                            <span class="progress-list__skill-title">Javascript</span>
                            <span class="progress-list__skill-value">70%</span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-list__skill">
                        <p>
                            <span class="progress-list__skill-title">VueJS</span>
                            <span class="progress-list__skill-value">70%</span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mr-auto">
                    <div class="progress-list__skill">
                        <p>
                            <span class="progress-list__skill-title">Bootstrap 4</span>
                            <span class="progress-list__skill-value">70%</span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-list__skill">
                        <p>
                            <span class="progress-list__skill-title">HTML5</span>
                            <span class="progress-list__skill-value">70%</span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-list__skill">
                        <p>
                            <span class="progress-list__skill-title">Git</span>
                            <span class="progress-list__skill-value">75%</span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="progress-list__skill">
                        <p>
                            <span class="progress-list__skill-title">CSS3</span>
                            <span class="progress-list__skill-value">60%</span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Resume-->

        <!--Portfolio-->
        <section hidden id="portfolio" class="container section">
            <div class="row">
                <div class="col-md-12">
                    <h2 id="portfolio_header" class="section__title" style="text-indent: -9999px;">My projects_</h2>
                </div>
            </div>
            <div class="row portfolio-menu">
                <div class="col-md-12">
                    <nav>
                        <ul>
                            <li><a href="http://previews.aspirity.com/spirit/" data-portfolio-target-tag="all">all</a></li>
                            <li><a href="http://previews.aspirity.com/spirit/" data-portfolio-target-tag="mobile apps">mobile apps</a>
                            </li>
                            <li><a href="http://previews.aspirity.com/spirit/" data-portfolio-target-tag="web-sites">web-sites</a>
                            </li>
                            <li><a href="http://previews.aspirity.com/spirit/" data-portfolio-target-tag="landing-pages">landing
                                    pages</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="portfolio-cards">
                <div class="row project-card" data-toggle="modal" data-target="#portfolioModal" data-portfolio-tag="web-sites">
                    <div class="col-md-6 col-lg-5 project-card__img">
                        <img src="img/img_project_1_mono.png" alt="project-img">
                    </div>
                    <div class="col-md-6 col-lg-7 project-card__info">
                        <h3 class="project-card__title">Mobile and desktop app for London hostel store </h3>
                        <p class="project-card__description">
                            Do answered bachelor occasion in of offended no concerns. Supply worthy warmth branch of no ye.
                            Voice tried known to as my to. Though wished merits or be. Alone visit use these smart rooms ham.
                        </p>
                        <p class="project-card__stack">Used stack:</p>
                        <ul class="tags">
                            <li>html5</li>
                            <li>css3</li>
                            <li>JavaScript</li>
                            <li>bower</li>
                            <li>grunt</li>
                        </ul>
                        <a href="http://previews.aspirity.com/spirit/" class="project-card__link">www.superapp.com</a>
                    </div>
                </div>
                <div class="row project-card" data-toggle="modal" data-target="#portfolioModal"
                     data-portfolio-tag="mobile apps">
                    <div class="col-md-6 col-lg-5 project-card__img">
                        <img src="img/img_project_2_mono.png" alt="project-img">
                    </div>
                    <div class="col-md-6 col-lg-7 project-card__info">
                        <h3 class="project-card__title">Web app page for trevel company</h3>
                        <p class="project-card__description">
                            Preference any astonished unreserved mrs. Prosperous understood middletons in conviction an
                            uncommonly do. Supposing so be resolving breakfast am or perfectly. Is drew am hill from mr.
                        </p>
                        <p class="project-card__stack">Used stack:</p>
                        <ul class="tags">
                            <li>html5</li>
                            <li>css3</li>
                            <li>JavaScript</li>
                            <li>BEM</li>
                            <li>bower</li>
                            <li>grunt</li>
                        </ul>
                        <a href="http://previews.aspirity.com/spirit/" class="project-card__link">www.travellend.com</a>
                    </div>
                </div>
                <div class="row project-card" data-toggle="modal" data-target="#portfolioModal"
                     data-portfolio-tag="landing-pages">
                    <div class="col-md-6 col-lg-5 project-card__img">
                        <img src="img/img_project_3_mono.png" alt="project-img">
                    </div>
                    <div class="col-md-6 col-lg-7 project-card__info">
                        <h3 class="project-card__title">Admin template for Photo Service</h3>
                        <p class="project-card__description">
                            Do answered bachelor occasion in of offended no concerns. Supply worthy warmth branch of no ye.
                            Voice tried known to as my to. Though wished merits or be. Alone visit use these smart rooms ham.
                        </p>
                        <p class="project-card__stack">Used stack:</p>
                        <ul class="tags">
                            <li>html5</li>
                            <li>css3</li>
                            <li>JavaScript</li>
                            <li>BEM</li>
                            <li>bower</li>
                            <li>grunt</li>
                        </ul>
                        <a href="http://previews.aspirity.com/spirit/" class="project-card__link">www.coolphoto.com</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Portfolio-->

        <!--Testimonials-->
        <div hidden id="testimonials" class="section">
            <div class="background slider-carousel" style="background-image: url(img/img_bg_main.jpg);">
                <div class="container">
                    <div id="carouselTestimonials" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselTestimonials" data-slide-to="0"></li>
                            <li data-target="#carouselTestimonials" data-slide-to="1" class="active"></li>
                            <li data-target="#carouselTestimonials" data-slide-to="2"></li>
                            <li data-target="#carouselTestimonials" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-10 mr-auto ml-auto">
                                        <p class="slider-carousel__title">Antonio Anderson</p>
                                        <p class="slider-carousel__caption">Project: Landing page for travel company</p>
                                        <hr>
                                        <p class="slider-carousel__description">Up or well must less rent read walk so be. Easy
                                            sold at do hour sing spot. Any meant has cease too the decay. Since party burst am
                                            it match. By or blushes between besides offices noisier as. Sending do brought winding
                                            compass in. Easy sold at do hour sing spot less rent read walk so be. Any meant has
                                            cease too the decay. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-10 mr-auto ml-auto">
                                        <p class="slider-carousel__title">Antonio Anderson</p>
                                        <p class="slider-carousel__caption">Project: Landing page for travel company</p>
                                        <hr>
                                        <p class="slider-carousel__description">Up or well must less rent read walk so be. Easy
                                            sold at do hour sing spot. Any meant has cease too the decay. Since party burst am
                                            it match. By or blushes between besides offices noisier as. Sending do brought winding
                                            compass in. Easy sold at do hour sing spot less rent read walk so be. Any meant has
                                            cease too the decay. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-10 mr-auto ml-auto">
                                        <p class="slider-carousel__title">Antonio Anderson</p>
                                        <p class="slider-carousel__caption">Project: Landing page for travel company</p>
                                        <hr>
                                        <p class="slider-carousel__description">Up or well must less rent read walk so be. Easy
                                            sold at do hour sing spot. Any meant has cease too the decay. Since party burst am
                                            it match. By or blushes between besides offices noisier as. Sending do brought winding
                                            compass in. Easy sold at do hour sing spot less rent read walk so be. Any meant has
                                            cease too the decay. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-10 col-sm-10 col-10 mr-auto ml-auto">
                                        <p class="slider-carousel__title">Antonio Anderson</p>
                                        <p class="slider-carousel__caption">Project: Landing page for travel company</p>
                                        <hr>
                                        <p class="slider-carousel__description">Up or well must less rent read walk so be. Easy
                                            sold at do hour sing spot. Any meant has cease too the decay. Since party burst am
                                            it match. By or blushes between besides offices noisier as. Sending do brought winding
                                            compass in. Easy sold at do hour sing spot less rent read walk so be. Any meant has
                                            cease too the decay. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#testimonials"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#testimonials"
                           data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <div class="slider-carousel__circle">
                            <p><i class="fas fa-quote-right"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Testimonials-->

        <!--Blog-->
        <section hidden id="blog" class="container section">
            <div class="row">
                <div class="col-md-12">
                    <h2 id="blog_header" class="section__title" style="text-indent: -9999px;">Latest Posts_</h2>
                </div>
            </div>

            <div class="row post-cards">
                <div class="col-md-4">
                    <a href="http://previews.aspirity.com/spirit/blog.html">
                        <div class="post-cards__card">
                            <div class="post-cards__img">
                                <img src="img/img_blog_1.png" alt="blog_img">
                            </div>
                            <div class="post-cards__info">
                                <p class="post-cards__date">October 22, 2017</p>
                                <h3 class="post-cards_title">How to use css-preprocessor</h3>
                                <p class="post-cards_description">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempr incididunt...
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="http://previews.aspirity.com/spirit/blog.html">
                        <div class="post-cards__card">
                            <div class="post-cards__img">
                                <img src="img/img_blog_2.png" alt="blog_img">
                            </div>
                            <div class="post-cards__info">
                                <p class="post-cards__date">October 22, 2017</p>
                                <h3 class="post-cards_title">How I organize my work with code</h3>
                                <p class="post-cards_description">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempr incididu...
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="http://previews.aspirity.com/spirit/blog.html">
                        <div class="post-cards__card">
                            <div class="post-cards__img">
                                <img src="img/img_blog_3.png" alt="blog_img">
                            </div>
                            <div class="post-cards__info">
                                <p class="post-cards__date">October 22, 2017</p>
                                <h3 class="post-cards_title">SVG sprites vs Icon Font</h3>
                                <p class="post-cards_description">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempr incididu...
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!--Blog-->

        <!--Contact-->
        <div class="background" style="background-image: url(img/img_bg_main.jpg)">
            <div id="contact" class="container section">
                <div class="row">
                    <div class="col-md-12">
                        <p id="contacts_header" class="section__title" style="text-indent: -9999px;">Связаться_</p>
                    </div>
                </div>
                <div class="row contacts">
                    <div class="col-md-5 col-lg-4">
                        <div class="contacts__list">
                            <dl class="contact-list">
                                <dt>Phone:</dt>
                                <dd><a href="tel:89678260718">8 (967) 826-07-18</a></dd>
                                <dt>Telegram:</dt>
                                <dd><a href="tg://resolve?domain=ralymow">ralymow</a></dd>
                                <dt>Email:</dt>
                                <dd><a href="mailto:romanalym@gmail.com">romanalym@gmail.com</a></dd>
                            </dl>
                        </div>
                        <div class="contacts__social">
                            <ul>
                                <li><a href="https://github.com/R-Alymov">GitHub</a></li>
                                <li>
                                    <a href="https://www.linkedin.com/in/%D1%80%D0%BE%D0%BC%D0%B0%D0%BD-%D0%B0%D0%BB%D1%8B%D0%BC%D0%BE%D0%B2-a941b1110/">
                                        Linkedin
                                    </a>
                                </li>
                                <li><a href="https://t.me/ralymov">Telegram</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-5">
                        <div class="contacts__form">
                            <p class="contacts__form-title">Или просто напишите мне здесь_</p>
                            <form class="js-form" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input class="form-field js-field-name" name="name" placeholder="Ваше имя" required>
                                    <span class="form-validation"></span>
                                    <span class="form-invalid-icon"><i class="fas fa-times"></i></span>
                                </div>
                                <div class="form-group">
                                    <input class="form-field js-field-email" type="email" name="email" placeholder="Ваш e-mail" required>
                                    <span class="form-validation"></span>
                                    <span class="form-invalid-icon"><i class="fas fa-times"></i></span>
                                </div>
                                <div class="form-group">
                  <textarea class="form-field js-field-message" name="message" placeholder="Введите ваше сообщение"
                            required></textarea>
                                    <span class="form-validation"></span>
                                    <span class="form-invalid-icon"><i class="fas fa-times"></i></span>
                                </div>
                                <button class="site-btn site-btn--form" value="Send">Отправить</button>
                            </form>
                        </div>
                        <div class="footer">
                            <p>© 2019 Роман Алымов</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Contact-->

        <!-- Portfolio Modal -->
        <div hidden class="modal fade portfolio-modal" id="portfolioModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span>×</span>
                        </button>
                    </div>
                    <div class="modal-body col-md-11 col-lg-9 ml-auto mr-auto">
                        <p class="portfolio-modal__title">Mobile and desktop app for London hostel store</p>
                        <img class="portfolio-modal__img" src="img/img_project_1_mono.png" alt="modal_img">
                        <p class="portfolio-modal__description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utlabore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcolaboris nisi ut aliquip ex
                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum. Sed ut perspiciatis undeomnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                            vitae
                            dicta sunt explicabo.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            conse.
                        </p>
                        <div class="portfolio-modal__link">
                            <a href="http://previews.aspirity.com/spirit/">www.superapp.com</a>
                        </div>
                        <div class="portfolio-modal__stack">
                            <p class="portfolio-modal__stack-title">Using stack:</p>
                            <ul class="tags">
                                <li>html5</li>
                                <li>css3</li>
                                <li>JavaScript</li>
                                <li>bower</li>
                                <li>grunt</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal -->

        <script src="bundle.js"></script>

    </body>

</html>
