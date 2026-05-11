<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('index.project_veeam_title') }} — {{ __('index.title') }}</title>
    <meta name="title" content="{{ __('index.project_veeam_title') }} — {{ __('index.meta_description') }}">
    <meta name="description" content="{{ __('index.project_veeam_description') }}">
    <meta name="author" content="Roman Alymov">
    <link rel="canonical" href="https://alymov.dev/veeam">

    <meta property="og:type" content="article">
    <meta property="og:url" content="https://alymov.dev/veeam">
    <meta property="og:title" content="{{ __('index.project_veeam_title') }}">
    <meta property="og:description" content="{{ __('index.project_veeam_description') }}">
    <meta property="og:image" content="https://alymov.dev/images/og-image.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Roman Alymov — Portfolio">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://alymov.dev/veeam">
    <meta name="twitter:title" content="{{ __('index.project_veeam_title') }}">
    <meta name="twitter:description" content="{{ __('index.project_veeam_description') }}">
    <meta name="twitter:image" content="https://alymov.dev/images/og-image.jpg">
    <meta name="twitter:site" content="@ElectricW1zard">
    <meta name="twitter:creator" content="@ElectricW1zard">

    <meta name="yandex-verification" content="990fe82cf8b2bd0b"/>
    <meta name="google-site-verification" content="CoXeOH2LsLULgCRmocM6-RU1FCjZWsAZrULnBRBqGG4"/>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "TechArticle",
      "name": "{{ __('index.project_veeam_title') }}",
      "author": {"@type": "Person", "name": "Roman Alymov"},
      "publisher": {"@type": "Person", "name": "Roman Alymov"},
      "description": "{{ __('index.project_veeam_description') }}"
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
                            <li><a href="/">{{ __('index.menu_about') }}</a></li>
                            <li><a href="#content">{{ __('index.menu_cv') }}</a></li>
                        </ul>
                    </div>
                    <div class="menu__lang">
                        <a href="?lang=en" class="menu__lang-link" title="English">EN</a>
                        <span class="menu__lang-sep">/</span>
                        <a href="?lang=ru" class="menu__lang-link" title="Русский">РУ</a>
                    </div>
                </nav>
            </div>
            <div class="menu__wrapper col-md-12 d-lg-none d-flex align-items-center">
                <button type="button" class="menu__mobile-button mr-auto" aria-label="Open menu">
                    <span><i class="icon-menu"></i></span>
                </button>
                <div class="menu__lang">
                    <a href="?lang=en" class="menu__lang-link" title="English">EN</a>
                    <span class="menu__lang-sep">/</span>
                    <a href="?lang=ru" class="menu__lang-link" title="Русский">РУ</a>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="main-header" role="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="personal-profile__name" style="font-size:36px;line-height:44px;">{{ __('index.project_veeam_title') }}</h1>
                <p class="personal-profile__work" style="margin-top:10px;">{{ __('index.project_veeam_subtitle') }}</p>
            </div>
        </div>
    </div>
</header>

<section id="content" class="container section">
    <div class="row">
        <div class="col-md-10">
            <article class="article">
                <p>{{ __('index.project_veeam_description') }}</p>

                <h3 class="article__heading">{{ __('index.project_veeam_what_done') }}</h3>
                <ul class="article__list">
                    <li>Analysis of existing infrastructure and identification of critical data for backup</li>
                    <li>Installation and configuration of Veeam Backup &amp; Replication v12 on a dedicated server</li>
                    <li>Configuration of backup jobs (Backup Jobs) for VMware vSphere virtual machines</li>
                    <li>Setup of retention policies and backup chain management</li>
                    <li>Configuration of offload repository for remote backup replication</li>
                    <li>Integration with Active Directory for access management</li>
                    <li>Monitoring and email notifications for backup status</li>
                    <li>Restore testing to verify backup integrity and reliability</li>
                </ul>

                <h3 class="article__heading">{{ __('index.project_veeam_tech') }}</h3>
                <ul class="article__list">
                    <li>Veeam Backup &amp; Replication v12</li>
                    <li>VMware vSphere / ESXi</li>
                    <li>Windows Server / PowerShell</li>
                    <li>Active Directory</li>
                    <li>Network Storage (NAS / SAN)</li>
                </ul>

                <p class="article__conclusion">The system ensures reliable data protection with recovery capabilities in case of failures, while minimizing downtime (RTO/RPO) in accordance with business requirements.</p>
            </article>
        </div>
    </div>
</section>

<div class="background" id="contact">
    <div class="container section">
        <div class="row">
            <div class="col-md-12">
                <div class="footer">
                    <p>&copy; {{ date("Y") }} Roman Alymov — Prague, Czech Republic</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/app.js"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }};
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)});
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
   ym(12345678, "init", {clickmap:true,trackLinks:true,accurateTrackBoutique:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/12345678" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
</body>
</html>