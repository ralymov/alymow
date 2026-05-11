<!DOCTYPE html>
<html lang="ru" prefix="og: https://ogp.me/ns#">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veeam Backup — Роман Алымов</title>
    <meta name="title" content="Veeam Backup & Replication — Проекты | Роман Алымов">
    <meta name="description" content="Описание проекта по внедрению Veeam Backup & Replication. Резервное копирование, защита данных, виртуализация.">
    <meta name="author" content="Roman Alymov">
    <link rel="canonical" href="https://alymov.dev/veeam">

    <meta property="og:type" content="article">
    <meta property="og:url" content="https://alymov.dev/veeam">
    <meta property="og:title" content="Veeam Backup & Replication — Проекты">
    <meta property="og:description" content="Описание проекта по внедрению решений резервного копирования на базе Veeam.">
    <meta property="og:image" content="https://alymov.dev/images/og-image.jpg">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:site_name" content="Roman Alymov — Portfolio">

    <meta property="twitter:card" content="summary">
    <meta property="twitter:url" content="https://alymov.dev/veeam">
    <meta name="twitter:title" content="Veeam Backup & Replication">
    <meta name="twitter:description" content="Проект по внедрению резервного копирования.">
    <meta name="twitter:image" content="https://alymov.dev/images/og-image.jpg">

    <meta name="yandex-verification" content="990fe82cf8b2bd0b"/>
    <meta name="google-site-verification" content="CoXeOH2LsLULgCRmocM6-RU1FCjZWsAZrULnBRBqGG4"/>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "TechArticle",
      "name": "Veeam Backup & Replication",
      "author": {"@type": "Person", "name": "Roman Alymov"},
      "publisher": {"@type": "Person", "name": "Roman Alymov"}
    }
    </script>

    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <meta name="theme-color" content="#6d56c1">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Roboto+Mono:wght@400;700&family=Inconsolata:wght@400;700&display=swap" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Roboto+Mono:wght@400;700&family=Inconsolata:wght@400;700&display=swap" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="menu">
    <div class="container">
        <div class="row">
            <div class="menu__wrapper d-none d-lg-block col-md-12">
                <nav class="d-flex align-items-center" aria-label="Main navigation">
                    <div class="mr-auto">
                        <ul>
                            <li><a href="/">Главная</a></li>
                            <li><a href="#content">{{ __('index.menu_cv') }}</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<header class="main-header" role="banner">
    <div class="container" style="padding-top:60px;padding-bottom:60px;">
        <div class="row">
            <div class="col-md-10">
                <h1 class="personal-profile__name" style="font-size:36px;line-height:44px;">Veeam Backup &amp; Replication</h1>
                <p style="font-size:18px;color:rgba(255,255,255,0.85);margin-top:10px;">Проект по внедрению системы резервного копирования</p>
            </div>
        </div>
    </div>
</header>

<section id="content" class="container section">
    <div class="row">
        <div class="col-md-10">
            <article class="article">
                <p>В рамках данного проекта была выполнена установка и первоначальная настройка корпоративного решения для резервного копирования — <strong>Veeam Backup & Replication</strong>. Проект был выполнен в рамках работ по модернизации IT-инфраструктуры.</p>

                <h3>Что было сделано:</h3>
                <ul>
                    <li>Анализ существующей инфраструктуры и определение критичных данных для резервного копирования</li>
                    <li>Установка и настройка Veeam Backup & Replication на выделенный сервер</li>
                    <li>Настройка заданий резервного копирования (Backup Jobs) для виртуальных машин VMware vSphere</li>
                    <li>Настройка политик хранения (retention policies), цепочек точек восстановления</li>
                    <li>Настройка репликации бэкапов на удалённый репозиторий (Offload Repository)</li>
                    <li>Интеграция с Active Directory для управления доступом</li>
                    <li>Мониторинг и оповещения через email-уведомления</li>
                    <li>Тестирование восстановления (Restore Testing) для проверки целостности бэкапов</li>
                </ul>

                <h3>Используемые технологии:</h3>
                <ul>
                    <li>Veeam Backup & Replication v12</li>
                    <li>VMware vSphere / ESXi</li>
                    <li>Windows Server / PowerShell</li>
                    <li>Active Directory</li>
                    <li>Сетевое хранилище (NAS/SAN)</li>
                </ul>

                <p>Система обеспечивает надёжную защиту данных с возможностью восстановления в случае сбоев, а также минимизацию времени простоя (RTO/RPO) в соответствии с бизнес-требованиями.</p>
            </article>
        </div>
    </div>
</section>

<div class="background" id="contact" style="padding:40px 0;">
    <div class="container section">
        <div class="row">
            <div class="col-md-12">
                <div class="footer">
                    <p>&copy; {{ date("Y") }} Roman Alymov</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/app.js"></script>
</body>
</html>