<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ __('index.meta_description') }}">
    <meta name="keywords" content="PHP,Laravel,VueJS,JavaScript,HTML,CSS">
    <meta name="author" content="Роман Алымов">
    <meta name="yandex-verification" content="990fe82cf8b2bd0b"/>
    <meta name="google-site-verification" content="CoXeOH2LsLULgCRmocM6-RU1FCjZWsAZrULnBRBqGG4"/>
    <link rel="canonical" href="https://alymow.ru"/>
    <title>{{ __('index.title') }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link href="{{ mix('css/style.css') }}" rel="stylesheet">
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
                                <li><a href="#hello">{{ __('index.menu_about') }}</a></li>
                                <li><a href="#resume">{{ __('index.menu_cv') }}</a></li>
                                <!--<li><a href="#portfolio">Портфолио</a></li>-->
                                <!--<li><a href="#testimonials">Отзывы</a></li>-->
                                <!--<li><a href="#blog">Блог</a></li>-->
                                <li><a href="#contact">{{ __('index.menu_contact') }}</a></li>
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
                    <li><a href="#hello">{{ __('index.menu_about') }}</a></li>
                    <li><a href="#resume">{{ __('index.menu_cv') }}</a></li>
                    <!--<li><a href="#portfolio">Портфолио</a></li>-->
                    <!--<li><a href="#testimonials">Отзывы</a></li>-->
                    <!--<li><a href="#blog">Блог</a></li>-->
                    <li><a href="#contact">{{ __('index.menu_contact') }}</a></li>
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
                    <h1 class="personal-profile__name">{{ __('index.about_name') }}_</h1>
                    <p class="personal-profile__work">{{ __('index.about_work') }}</p>
                    <div class="personal-profile__contacts">
                        <dl class="contact-list contact-list__opacity-titles">
                            <dt>{{ __('index.about_age') }}</dt>
                            <dd>{{Carbon\Carbon::parse('23.04.1996')->age}}</dd>
                            <dt>{{ __('index.about_phone') }}</dt>
                            <dd><a href="tel:82344563333">8 (967) 826-07-18</a></dd>
                            <dt>Email:</dt>
                            <dd><a href="mailto:romanalym@gmail.com">romanalym@gmail.com</a></dd>
                            <dt>{{ __('index.about_place') }}</dt>
                            <dd>{{ __('index.about_location') }}</dd>
                        </dl>
                    </div>
                    <p class="personal-profile__social">
                        <a href="https://github.com/ralymov" target="_blank"><i class="icon-github-circled"></i></a>
                        <a href="https://www.linkedin.com/in/ralymov" target="_blank"><i
                                class="icon-linkedin-squared"></i></a>
                        <a href="https://t.me/ralymov" target="_blank"><i class="icon-telegram"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </header>
    <!--Header-->

    <hr>

    <!--Resume-->
    <section id="resume" class="container section">
        <div class="row">
            <div class="col-md-10">
                <h2 id="resume_header" class="section__title" style="text-indent: 0;">
                    Тестовое задание Veeam Software_
                </h2>

                <ol>
                    <?php
                    $escapedPHP = "<?php session_start(); sleep(10); ?>"
                    ?>
                    <li>
                        <b>PHP.</b> Что будет происходить если одновременно открыть 100 вкладок в браузере с этим
                        скриптом: <br>
                        {{$escapedPHP}}
                        <br>
                        Из <a href="https://www.php.net/manual/ru/session.examples.basic.php">документации PHP</a>:
                        <pre>
Сессии, использующие файлы (по умолчанию в PHP), блокируют файл сессии сразу при открытии сессии
функцией session_start() или косвенно при указании session.auto_start. После блокировки, ни один
другой скрипт не может получить доступ к этому же файлу сессии, пока он не будет закрыт или при
завершении скрипта или при вызове функции session_write_close().</pre>

                        Соответственно, первая открытая вкладка с этим скриптом заблокирует сессию, и следующая вкладка
                        будет ожидать, пока не отработает и не завершится первая (это может быть одна из первых, или
                        несколько первых, в зависимости от задержек сети, маршрутизации, количества воркеров PHP) и так
                        далее. <br> Фактически, выстроится очередь, и часть вкладок "упадет" по таймауту.<br><br>
                    </li>

                    <li>
                        <b>MySQL.</b> В таблице хранятся целые числа, отсортированные по возрастанию, некоторые были
                        удалены. Найдите второе пропущенное число. <br>
                        <pre>
WITH RECURSIVE all_numbers AS
  (SELECT 1 AS number
   UNION ALL SELECT number + 1
   FROM all_numbers
   WHERE number <
       (SELECT MAX(id)
        FROM users))
SELECT *
FROM all_numbers
EXCEPT
SELECT id
FROM users
ORDER BY number
LIMIT 1, 1;</pre>
                    </li>

                    <li>
                        <b>MySQL.</b> Есть таблица сотрудников: name, job title, salary. Вывести сотрудников, чья
                        зарплата выше средней среди каждого job title, не используя группировку и подзапросы.<br><br>

                        БЕЗ группировки и подзапросов
                        <pre>
CREATE TEMPORARY TABLE average_salaries
SELECT name,
       job_title,
       AVG(salary) OVER (PARTITION BY job_title) AS avg_salary
FROM employees;

SELECT e.name,
       e.job_title,
       e.salary
FROM employees e
JOIN average_salaries avs ON e.job_title = avs.job_title
AND e.name = avs.name
WHERE e.salary > avs.avg_salary;</pre>

                        Вариант без ограничений
                        <pre>
SELECT name,
       job_title,
       salary
FROM employees e
WHERE salary >
    (SELECT avg(salary)
     FROM employees e2
     WHERE e2.job_title = e.job_title);</pre>
                    </li>

                    <li>
                        <b>PHP.</b> Найти первые три числа больше заданного в отсортированном массиве.
                        <pre>
//Without missing number
function findNumbers(array $array, float $inputNumber): array
{
    $inputNumberIndex = array_search($inputNumber, $array);
    if ($inputNumberIndex === false) {
        $inputNumberIndex = -1;
    }
    return array_slice($array, $inputNumberIndex + 1, 3);
}

//With missing numbers - binary search closest to $inputNumber
function findNumbersWithMissing(array $array, float $inputNumber): array
{
    $n = count($array);
    if ($inputNumber <= $array[0]) {
        return array_slice($array, 1, 3);
    }
    if ($inputNumber >= $array[$n - 1]) {
        return array_slice($array, $n, 3);
    }

    $i = 0;
    $j = $n;
    $mid = 0;
    while ($i < $j) {
        $mid = floor(($i + $j) / 2);

        if ($array[$mid] === $inputNumber) {
            return array_slice($array, $mid + 1, 3);
        }

        if ($inputNumber < $array[$mid]) {
            if ($mid > 0 && $inputNumber > $array[$mid - 1]) {
                return array_slice($array, $mid, 3);
            }
            $j = $mid;
        } else {
            if ($mid < $n - 1 && $inputNumber < $array[$mid + 1]) {
                return array_slice($array, $mid + 1, 3);
            }
            $i = $mid + 1;
        }
    }

    return array_slice($array, $mid, 3);
}</pre>
                    </li>

                    <li>
                        <b>PHP.</b> Есть массив объектов одного класса. Предложите как можно больше вариантов сортировки
                        массива по одному из свойств объектов.
                        <pre>
1. $key = 'someKey';
usort($array, function (object $a, object $b) use ($key) {
    return $a->$key <=> $b->$key;
});

2. function bubbleSort($array, $key)
{
    $length = count($array);
    if (!$length) {
        return $array;
    }
    for ($outer = 0; $outer < $length; $outer++) {
        for ($inner = 0; $inner < $length; $inner++) {
            if ($array[$outer]->$key < $array[$inner]->$key) {
                $tmp = $array[$outer]->$key;
                $array[$outer]->$key = $array[$inner]->$key;
                $array[$inner]->$key = $tmp;
            }
        }
    }
    return $array;
}

bubbleSort($array, 'value');

3. class SortObjects extends SplMaxHeap
{
    public $key;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    function compare($a, $b)
    {
        return $b->{$this->key} - $a->{$this->key};
    }
}

$sorter = new SortObjects('value');
array_map([$sorter, 'insert'], $array);
$sortedArray = iterator_to_array($sorter);</pre>
                    </li>

                    <li>
                        <b>MySQL.</b> Есть огромная таблица заказов и таблица с одной ячейкой, в которой указана дата.
                        Нужно посчитать сумму оплат по заказам, которые были позже даты, указанной во второй таблице.
                        Предложить и обосновать максимально эффективное решение <br><br>

                        Таблица с заказами - `orders` (поля - `id`, `amount`, `date`)<br>
                        Таблица с датой - `dates` (поле - `date`)<br><br>

                        Для повышения скорости работы следует создать индекс на поле `date` таблицы `orders`
                        В данном случае эффективнее будет работать подзапрос, а не JOIN, т.к. подзапрос
                        некоррелированный,
                        соответственно будет выполнен только 1 раз.
                        <pre>
SELECT sum(orders.amount) AS orders_amount
FROM orders
WHERE orders.date >
      (SELECT dates.date
       FROM dates
       LIMIT 1);</pre>
                    </li>
                </ol>
            </div>
        </div>
    </section>
    <!--Resume-->


    <!--Contact-->
    <div class="background">
        <div id="contact" class="container section">
            <div class="row">
                <div class="col-md-12">
                    <p id="contacts_header" class="section__title" style="text-indent: -9999px;">
                        {{ __('index.contact') }}_
                    </p>
                </div>
            </div>
            <div class="row contacts">
                <div class="col-md-5 col-lg-4">
                    <div class="contacts__list">
                        <dl class="contact-list">
                            <dt>{{ __('index.about_phone') }}</dt>
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
                                <a target="_blank" href="https://www.linkedin.com/in/ralymov">
                                    Linkedin
                                </a>
                            </li>
                            <li><a href="https://t.me/ralymov" target="_blank">Telegram</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 col-lg-5">
                    <div class="contacts__form">
                        <p class="contacts__form-title">{{ __('index.contact_me') }}_</p>
                        <form class="js-form" enctype="multipart/form-data">
                            <div class="form-group">
                                <input class="form-field js-field-name" name="name"
                                       placeholder="{{ __('index.form_name') }}" required>
                                <span class="form-validation"></span>
                                <span class="form-invalid-icon"><i class="icon-cancel"></i></span>
                            </div>
                            <div class="form-group">
                                <input class="form-field js-field-email" type="email" name="email"
                                       placeholder="{{ __('index.form_email') }}" required>
                                <span class="form-validation"></span>
                                <span class="form-invalid-icon"><i class="icon-cancel"></i></span>
                            </div>
                            <div class="form-group">
                            <textarea class="form-field js-field-message" name="message"
                                      placeholder="{{ __('index.form_message') }}" required></textarea>
                                <span class="form-validation"></span>
                                <span class="form-invalid-icon"><i class="icon-cancel"></i></span>
                            </div>
                            <button class="site-btn site-btn--form" value="Send">{{ __('index.send') }}</button>
                        </form>
                    </div>
                    <div class="footer">
                        <p>© {{date("Y")}} {{ __('index.about_name') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact-->

    <script src="{{mix('js/app.js')}}"></script>

</body>

</html>
