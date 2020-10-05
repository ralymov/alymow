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
    <meta name="yandex-verification" content="990fe82cf8b2bd0b"/>
    <meta name="google-site-verification" content="CoXeOH2LsLULgCRmocM6-RU1FCjZWsAZrULnBRBqGG4"/>
    <link rel="canonical" href="https://alymow.ru"/>
    <title>Создание и оптимизация web-приложений на PHP, Laravel, VueJS</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link href="{{mix('css/style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono|Inconsolata" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

<!--Main menu-->
<div class="menu">
    <div class="container">
        <div class="row">
            <div class="menu__wrapper d-none d-lg-block col-md-12">
                <nav class="d-flex align-items-center">
                    <div class="mr-auto">
                        <ul>
                            <li><a href="#hello">О себе</a></li>
                            <li><a href="#resume">Резюме</a></li>
                            <!--<li><a href="#portfolio">Портфолио</a></li>-->
                            <!--<li><a href="#testimonials">Отзывы</a></li>-->
                            <!--<li><a href="#blog">Блог</a></li>-->
                            <li><a href="#contact">Контакты</a></li>
                        </ul>
                    </div>

                    <div>
                        <select class="select-language">
                            @foreach($locales as $lang)
                                <option data-data='{"flag": "{{$lang['flag']}}"}' value="?lang={{ $lang['code'] }}"
                                        @if($locale == $lang['code']) selected @endif>
                                    {{ $lang['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </nav>
            </div>


            <div class="menu__wrapper col-md-12 d-lg-none d-flex align-items-center">
                <button type="button" class="menu__mobile-button mr-auto">
                    <span><i class="icon-menu"></i></span>
                </button>

                <div>
                    <select class="select-language">
                        @foreach($locales as $lang)
                            <option data-data='{"flag": "{{$lang['flag']}}"}' value="?lang={{ $lang['code'] }}"
                                    @if($locale == $lang['code']) selected @endif>
                                {{ $lang['name'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Main menu-->

<!-- Mobile menu -->
<div class="mobile-menu d-lg-none">
    <div class="container">
        <div class="mobile-menu__close">
            <span><i class="icon-cancel"></i></span>
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
                <div class="profile-image"></div>
            </div>
            <div class="col-md-8">
                <h1 class="personal-profile__name">Алымов Роман_</h1>
                <p class="personal-profile__work">Backend-разработчик</p>
                <div class="personal-profile__contacts">
                    <dl class="contact-list contact-list__opacity-titles">
                        <dt>Возраст:</dt>
                        <dd>{{Carbon\Carbon::parse('23.04.1996')->age}}</dd>
                        <dt>Телефон:</dt>
                        <dd><a href="tel:82344563333">8 (967) 826-07-18</a></dd>
                        <dt>Email:</dt>
                        <dd><a href="mailto:romanalym@gmail.com">romanalym@gmail.com</a></dd>
                        <dt>Место:</dt>
                        <dd>Россия, Астраханская область, г. Астрахань</dd>
                    </dl>
                </div>
                <p class="personal-profile__social">
                    <a href="https://github.com/ralymov" target="_blank"><i class="icon-github-circled"></i></a>
                    <a href="https://www.linkedin.com/in/%D1%80%D0%BE%D0%BC%D0%B0%D0%BD-%D0%B0%D0%BB%D1%8B%D0%BC%D0%BE%D0%B2-a941b1110/"
                       target="_blank"><i class="icon-linkedin-squared"></i></a>
                    <a href="https://t.me/ralymov" target="_blank"><i class="icon-telegram"></i></a>
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
            <h2 id="hello_header" class="section__title" style="text-indent: 0;"></h2>
            <p class="section__description">
                Занимаюсь backend-разработкой, в основном это PHP с использованием фреймворков. <br>
                Готов к работе в команде и индивидуально. <br>
                В наличии желание постоянно изучать что-то новое и неизвестное. <br>
                Увлекаюсь музыкой, играю в группе на гитаре, люблю новые интересные места. <br>
            </p>
            <a href="uploads/alymov-resume.pdf" target="_blank" class="section_btn site-btn">
                <img src="images/img_btn_icon.png" alt="resume">Скачать резюме
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
            <ul>
                <li><strong>Backend</strong>: PHP, Laravel;</li>
                <li><strong>Frontend</strong>: JS, Vue.js, HTML5, CSS3;</li>
                <li><strong>Базы</strong>&nbsp;<strong>данных</strong>: PostgreSQL, MySQL;<br></li>
                <li><strong>Системы контроля версий</strong>:&nbsp;Git;</li>
            </ul>
            <strong>Английский язык</strong>: Pre-intermediate (читаю профессиональную литературу и статьи).&nbsp;

        </div>
    </div>
    <div class="row">
        <div class="col-md-8 section__resume resume-list">
            <h3 class="resume-list_title">Работа</h3>
            <div class="resume-list__block">
                <p class="resume-list__block-title">Vigrom</p>
                <p class="resume-list__block-date">2019 - по настоящее время</p>
                <p>
                    <b>Backend PHP Developer</b><br>
                    Разработка бэкенда для продукта, связанного с онлайн-играми
                </p>
            </div>
            <div class="resume-list__block">
                <p class="resume-list__block-title">Webmechanic</p>
                <p class="resume-list__block-date">2017 - 2019</p>
                <p>
                    <b>Web Developer</b><br>
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
    <div class="row">
        <div class="col-md-8 section__resume resume-list">
            <h3 class="resume-list_title">Образование</h3>
            <div class="resume-list__block">
                <p class="resume-list__block-title">Астраханский государственный технический университет</p>
                <p class="resume-list__block-date">2017 - 2019</p>
                <p>
                    Магистратура, направление подготовки "Информационное и программное обеспечение автоматизированных
                    систем".
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
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                         aria-valuemax="100">
                    </div>
                </div>
            </div>
            <div class="progress-list__skill">
                <p>
                    <span class="progress-list__skill-title">Laravel</span>
                    <span class="progress-list__skill-value">85%</span>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                         aria-valuemax="100">
                    </div>
                </div>
            </div>
            <div class="progress-list__skill">
                <p>
                    <span class="progress-list__skill-title">Javascript</span>
                    <span class="progress-list__skill-value">70%</span>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                         aria-valuemax="100">
                    </div>
                </div>
            </div>
            <div class="progress-list__skill">
                <p>
                    <span class="progress-list__skill-title">VueJS</span>
                    <span class="progress-list__skill-value">70%</span>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                         aria-valuemax="100">
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
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                         aria-valuemax="100">
                    </div>
                </div>
            </div>
            <div class="progress-list__skill">
                <p>
                    <span class="progress-list__skill-title">HTML5</span>
                    <span class="progress-list__skill-value">70%</span>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                         aria-valuemax="100">
                    </div>
                </div>
            </div>
            <div class="progress-list__skill">
                <p>
                    <span class="progress-list__skill-title">Git</span>
                    <span class="progress-list__skill-value">75%</span>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                         aria-valuemax="100">
                    </div>
                </div>
            </div>
            <div class="progress-list__skill">
                <p>
                    <span class="progress-list__skill-title">CSS3</span>
                    <span class="progress-list__skill-value">60%</span>
                </p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                         aria-valuemax="100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Resume-->

<!--Contact-->
<div class="background">
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
                        <dd><a href="tg://resolve?domain=ralymov">ralymov</a></dd>
                        <dt>Email:</dt>
                        <dd><a href="mailto:romanalym@gmail.com">romanalym@gmail.com</a></dd>
                    </dl>
                </div>
                <div class="contacts__social">
                    <ul>
                        <li><a href="https://github.com/ralymov" target="_blank">GitHub</a></li>
                        <li>
                            <a target="_blank"
                               href="https://www.linkedin.com/in/%D1%80%D0%BE%D0%BC%D0%B0%D0%BD-%D0%B0%D0%BB%D1%8B%D0%BC%D0%BE%D0%B2-a941b1110/">
                                Linkedin
                            </a>
                        </li>
                        <li><a href="https://t.me/ralymov" target="_blank">Telegram</a></li>
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
                            <span class="form-invalid-icon"><i class="icon-cancel"></i></span>
                        </div>
                        <div class="form-group">
                            <input class="form-field js-field-email" type="email" name="email" placeholder="Ваш e-mail"
                                   required>
                            <span class="form-validation"></span>
                            <span class="form-invalid-icon"><i class="icon-cancel"></i></span>
                        </div>
                        <div class="form-group">
                  <textarea class="form-field js-field-message" name="message" placeholder="Введите ваше сообщение"
                            required></textarea>
                            <span class="form-validation"></span>
                            <span class="form-invalid-icon"><i class="icon-cancel"></i></span>
                        </div>
                        <button class="site-btn site-btn--form" value="Send">Отправить</button>
                    </form>
                </div>
                <div class="footer">
                    <p>© {{date("Y")}} Роман Алымов</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Contact-->

<script src="{{mix('js/app.js')}}"></script>

</body>

</html>
