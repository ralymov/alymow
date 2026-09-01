<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('index.title') }}</title>
    <meta name="title" content="{{ __('index.title') }}">
    <meta name="description" content="{{ __('index.meta_description') }}">
    <meta name="author" content="Roman Alymov">
    <link rel="canonical" href="https://alymov.dev/">

    <meta property="og:type" content="profile">
    <meta property="og:url" content="https://alymov.dev/">
    <meta property="og:title" content="Roman Alymov — Backend Developer">
    <meta property="og:description" content="Backend developer. PHP, Laravel, VueJS. Professional development of web applications.">
    <meta property="og:image" content="https://alymov.dev/images/og-image.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Roman Alymov — Portfolio">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://alymov.dev/">
    <meta name="twitter:title" content="Roman Alymov — Backend Developer">
    <meta name="twitter:description" content="Backend developer. PHP, Laravel, VueJS. Professional development of web applications.">
    <meta name="twitter:image" content="https://alymov.dev/images/og-image.jpg">
    <meta name="twitter:site" content="@ElectricW1zard">
    <meta name="twitter:creator" content="@ElectricW1zard">

    <meta name="yandex-verification" content="990fe82cf8b2bd0b"/>
    <meta name="google-site-verification" content="CoXeOH2LsLULgCRmocM6-RU1FCjZWsAZrULnBRBqGG4"/>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Person",
      "name": "Roman Alymov",
      "url": "https://alymov.dev",
      "description": "Backend developer. Professional development of web applications using PHP, Laravel, VueJS.",
      "jobTitle": "Backend Developer",
      "sameAs": [
        "https://github.com/ralymov",
        "https://www.linkedin.com/in/ralymov",
        "https://t.me/ElectricW1zard"
      ]
    }
    </script>

    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <meta name="theme-color" content="#6d56c1">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Roboto+Mono:wght@400;700&family=Inconsolata:wght@400;700&display=swap" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Roboto+Mono:wght@400;700&family=Inconsolata:wght@400;700&display=swap" rel="stylesheet">
    <link href="/css/style.css?v=3" rel="stylesheet">
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
                            <li><a href="#hello">{{ __('index.menu_about') }}</a></li>
                            <li><a href="#resume">{{ __('index.menu_cv') }}</a></li>
                            <li><a href="#skills">{{ __('index.menu_skills') }}</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="menu__wrapper col-md-12 d-lg-none d-flex align-items-center">
                <button type="button" class="menu__mobile-button mr-auto" aria-label="Open menu">
                    <span><i class="icon-menu"></i></span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="mobile-menu d-lg-none" role="dialog" aria-label="Mobile menu">
    <div class="container">
        <div class="mobile-menu__close"><span><i class="icon-cancel"></i></span></div>
        <nav class="mobile-menu__wrapper">
            <ul>
                <li><a href="#hello">{{ __('index.menu_about') }}</a></li>
                <li><a href="#resume">{{ __('index.menu_cv') }}</a></li>
                <li><a href="#skills">{{ __('index.menu_skills') }}</a></li>
            </ul>
        </nav>
    </div>
</div>

<header class="main-header" role="banner">
    <div class="container">
        <div class="row personal-profile">
            <div class="col-md-4 col-lg-3 personal-profile__avatar">
                <div class="profile-image" role="img" aria-label="Photo of Roman Alymov"></div>
            </div>
            <div class="col-md-8 col-lg-9 text-center">
                <h1 class="personal-profile__name">{{ __('index.about_name') }}</h1>
                <p class="personal-profile__work">{{ __('index.about_work') }}</p>
                <div class="personal-profile__contacts">
                    <dl class="contact-list contact-list__opacity-titles">
                        <dt>{{ __('index.about_age') }}</dt>
                        <dd>30</dd>
                        <dt>{{ __('index.about_phone') }}</dt>
                        <dd><a href="tel:+420778112355" dir="ltr">+420 778 112 355</a></dd>
                        <dt>Email:</dt>
                        <dd><a href="mailto:romanalym@gmail.com" dir="ltr">romanalym@gmail.com</a></dd>
                        <dt>{{ __('index.about_place') }}</dt>
                        <dd>{{ __('index.about_location') }}</dd>
                    </dl>
                </div>
                <p class="personal-profile__social">
                    <a href="https://github.com/ralymov" target="_blank" rel="noopener noreferrer" aria-label="GitHub profile">
                        <i class="icon-github-circled"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/ralymov" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn profile">
                        <i class="icon-linkedin-squared"></i>
                    </a>
                    <a href="https://t.me/ElectricW1zard" target="_blank" rel="noopener noreferrer" aria-label="Telegram">
                        <i class="icon-telegram"></i>
                    </a>
                </p>
            </div>
        </div>
    </div>
</header>

<section id="hello" class="container section">
    <div class="row">
        <div class="col-md-10">
            <h2 id="hello_header" class="section__title" style="text-indent: 0;">{{ __('index.about_title') }}</h2>
            <p class="section__description">{!! __('index.about_description') !!}</p>
            <a href="{{ __('index.about_save_cv_link') }}" target="_blank" rel="noopener noreferrer" class="section_btn site-btn">
                <img src="/images/img_btn_icon.png" alt="" aria-hidden="true">{{ __('index.about_save_cv') }}
            </a>
        </div>
    </div>
</section>

<hr>

<section id="resume" class="container section" aria-label="Resume">
    <div class="row">
        <div class="col-md-10">
            <h2 id="resume_header" class="section__title" style="text-indent: 0;">{{ __('index.resume_title') }}</h2>
            <ul class="skills-inline">
                <li><strong>Backend</strong>: PHP, Laravel</li>
                <li><strong>Frontend</strong>: JS, Vue.js, HTML5, CSS3</li>
                <li><strong>{{ __('index.databases') }}</strong>: PostgreSQL, MySQL</li>
                <li><strong>{{ __('index.cvs') }}</strong>: Git, Docker, CI/CD</li>
                <li><strong>AI-Assisted Development</strong>: prompt engineering, LLM &amp; agent integration, multi-agent workflows, AI-assisted testing &amp; legacy migration</li>
            </ul>
            <p class="english-level"><strong>{{ __('index.english_language') }}</strong>: {{ __('index.english_level') }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 section__resume resume-list">
            <h3 class="resume-list_title">{{ __('index.work_title') }}</h3>
            <div class="resume-list__block">
                <p class="resume-list__block-title">Vigrom</p>
                <p class="resume-list__block-date">2019 — {{ __('index.work_until_now') }}</p>
                <p><b>Backend PHP Developer</b><br>{{ __('index.work_1_description') }}</p>
            </div>
            <div class="resume-list__block">
                <p class="resume-list__block-title">Webmechanic</p>
                <p class="resume-list__block-date">2017 — 2019</p>
                <p><b>Web Developer</b><br>{{ __('index.work_2_description') }}</p>
            </div>
            <div class="resume-list__block">
                <p class="resume-list__block-title">{{ __('index.ASTU') }}</p>
                <p class="resume-list__block-date">2015 — 2017</p>
                <p><b>{{ __('index.work_3_title') }}</b><br>{{ __('index.work_3_description') }}</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 section__resume resume-list">
            <h3 class="resume-list_title">{{ __('index.education_title') }}</h3>
            <div class="resume-list__block">
                <p class="resume-list__block-title">{{ __('index.ASTU') }}</p>
                <p class="resume-list__block-date">2017 — 2019</p>
                <p>{{ __('index.education_1_description') }}</p>
            </div>
            <div class="resume-list__block">
                <p class="resume-list__block-title">{{ __('index.ASTU') }}</p>
                <p class="resume-list__block-date">2013 — 2017</p>
                <p>{{ __('index.education_2_description') }}</p>
            </div>
        </div>
    </div>
</section>

<section id="skills" class="container section" aria-label="Skills">
    <div class="row">
        <div class="col-md-10">
            <h2 class="section__title" style="text-indent: 0;">{{ __('index.skills') }}</h2>
        </div>
    </div>
    <div class="row section__resume progress-list js-progress-list">
        <div class="col-md-5 mr-auto">
            <div class="progress-list__skill">
                <p><span class="progress-list__skill-title">PHP</span><span class="progress-list__skill-value">85%</span></p>
                <div class="progress"><div class="progress-bar" style="width: 85%;"></div></div>
            </div>
            <div class="progress-list__skill">
                <p><span class="progress-list__skill-title">Laravel</span><span class="progress-list__skill-value">85%</span></p>
                <div class="progress"><div class="progress-bar" style="width: 85%;"></div></div>
            </div>
            <div class="progress-list__skill">
                <p><span class="progress-list__skill-title">JavaScript / Vue.js</span><span class="progress-list__skill-value">70%</span></p>
                <div class="progress"><div class="progress-bar" style="width: 70%;"></div></div>
            </div>
            <div class="progress-list__skill">
                <p><span class="progress-list__skill-title">Node.js</span><span class="progress-list__skill-value">65%</span></p>
                <div class="progress"><div class="progress-bar" style="width: 65%;"></div></div>
            </div>
        </div>
        <div class="col-md-5 mr-auto">
            <div class="progress-list__skill">
                <p><span class="progress-list__skill-title">PostgreSQL / MySQL</span><span class="progress-list__skill-value">80%</span></p>
                <div class="progress"><div class="progress-bar" style="width: 80%;"></div></div>
            </div>
            <div class="progress-list__skill">
                <p><span class="progress-list__skill-title">Docker / CI/CD</span><span class="progress-list__skill-value">75%</span></p>
                <div class="progress"><div class="progress-bar" style="width: 75%;"></div></div>
            </div>
            <div class="progress-list__skill">
                <p><span class="progress-list__skill-title">Git</span><span class="progress-list__skill-value">90%</span></p>
                <div class="progress"><div class="progress-bar" style="width: 90%;"></div></div>
            </div>
            <div class="progress-list__skill">
                <p><span class="progress-list__skill-title">REST API</span><span class="progress-list__skill-value">80%</span></p>
                <div class="progress"><div class="progress-bar" style="width: 80%;"></div></div>
            </div>
            <div class="progress-list__skill">
                <p><span class="progress-list__skill-title">HTML5 / CSS3 / SCSS</span><span class="progress-list__skill-value">75%</span></p>
                <div class="progress"><div class="progress-bar" style="width: 75%;"></div></div>
            </div>
        </div>
    </div>
</section>

<div class="background" id="contact">
    <div class="container section">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section__title" style="text-indent: 0;">{{ __('index.contact') }}</h2>
            </div>
        </div>
        <div class="row contacts">
            <div class="col-md-8 col-lg-6">
                <div class="contacts__list">
                    <dl class="contact-list">
                        <dt>{{ __('index.about_phone') }}</dt>
                        <dd><a href="tel:+420778112355" dir="ltr">+420 778 112 355</a></dd>
                        <dt>Telegram:</dt>
                        <dd><a href="https://t.me/ElectricW1zard" target="_blank" rel="noopener noreferrer">@ElectricW1zard</a></dd>
                        <dt>Email:</dt>
                        <dd><a href="mailto:romanalym@gmail.com" dir="ltr">romanalym@gmail.com</a></dd>
                        <dt>{{ __('index.about_place') }}</dt>
                        <dd>{{ __('index.about_location') }}</dd>
                    </dl>
                </div>
                <div class="contacts__social">
                    <ul>
                        <li><a href="https://github.com/ralymov" target="_blank" rel="noopener noreferrer">GitHub</a></li>
                        <li><a href="https://www.linkedin.com/in/ralymov" target="_blank" rel="noopener noreferrer">LinkedIn</a></li>
                        <li><a href="https://t.me/ElectricW1zard" target="_blank" rel="noopener noreferrer">Telegram</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="footer">
                    <p>&copy; {{ date("Y") }} {{ __('index.about_name') }} — Prague, Czech Republic</p>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="alternate" hreflang="en" href="https://alymov.dev/?lang=en" />
<link rel="alternate" hreflang="ru" href="https://alymov.dev/?lang=ru" />
<link rel="alternate" hreflang="x-default" href="https://alymov.dev/" />
<script src="/js/app.js"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }};;
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)});
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
   ym(12345678, "init", {clickmap:true,trackLinks:true,accurateTrackBoutique:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/12345678" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
</body>
</html>