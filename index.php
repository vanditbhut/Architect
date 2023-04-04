<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architect</title>

    <link rel="stylesheet" href="./css/all-css.css">
    <link rel="stylesheet" href="./css/splide.css">
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" href="./css/responsive.css">
</head>
<script src="./js/all-js.js"></script>


<body>

    <!-- Header -->
    <header id="header" class="header">
        <div class="columns is-vcentered is-mobile is-gapless">
            <div class="column col-header col-middle">
                <div class="theme-logo">
                    <a href="./">
                        <picture>
                            <source srcset="./image/logo.webp" type="image/webp">
                            <source srcset="./image/logo.jpg" type="image/jpg">
                            <img src="./image/logo.jpg" alt="Logo Image" width="100px" height="100px">
                        </picture>
                    </a>
                </div>
            </div>
            <div class="column col-header col-middle">
                <div class="header-primary-menu-wrapper">
                    <div class="header-primary-menu-wrapper-inner">
                        <div id="menu-trigger" class="menu-trigger insomenu-bars"> <span></span> </div>
                        <nav id="header-primary-menu">
                            <ul id="header1__menu1" class="header__menu1">
                                <li class="header__menu-item">
                                    <a class="header__menu-link" href="#home" data-href="home" onclick="menuresponsiveclose()">
                                        <span class="header-text">Home</span>
                                    </a>
                                </li>
                                <li class="header__menu-item">
                                    <a class="header__menu-link" href="#works" data-href="works" onclick="menuresponsiveclose()">
                                        <span class="header-text">Projects</span>
                                    </a>
                                </li>
                                <li class="header__menu-item">
                                    <a class="header__menu-link" href="#services" data-href="services" onclick="menuresponsiveclose()">
                                        <span class="header-text">Services</span>
                                    </a>
                                </li>
                                <li class="header__menu-item">
                                    <a class="header__menu-link" href="#blog" data-href="blog" onclick="menuresponsiveclose()">
                                        <span class="header-text">Blog</span>
                                    </a>
                                </li>
                                <li class="header__menu-item">
                                    <a class="header__menu-link" href="#team" data-href="team" onclick="menuresponsiveclose()">
                                        <span class="header-text">About</span>
                                    </a>
                                </li>
                                <li class="header__menu-item">
                                    <a class="header__menu-link" href="#footer" data-href="footer" onclick="menuresponsiveclose()">
                                        <span class="header-text">contact</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- section 2-->
    <section id="home" class="pb-0 poster">
        <div class="poster-img">
            <div id="poster-slider" class="splide ">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="poster-splide-img">
                                <picture>
                                    <source media="(max-width:400px)" srcset="./image/poster-3-m.webp" type="image/webp">
                                    <source media="(max-width:400px)" srcset="./image/poster-3-m.jpg" type="image/jpeg"> <!--1000*1000-->
                                    <source media="(max-width:600px)" srcset="./image/poster-3-t.webp" type="image/webp">
                                    <source media="(max-width:600px)" srcset="./image/poster-3-t.jpg" type="image/jpeg"> <!--1100*900-->
                                    <source media="(max-width:1000px)" srcset="./image/poster-3-d.webp" type="image/webp">
                                    <source media="(max-width:1000px)" srcset="./image/poster-3-d.jpg" type="image/jpeg"> <!--1200*800-->
                                    <source srcset="./image/poster-3.webp" type="image/webp">
                                    <source srcset="./image/poster-3.jpg" type="image/jpeg">
                                    <img src="./image/poster-3.jpg" width="1920" height="940" alt="Banner" />
                                </picture>
                            </div>
                            <div class="banner-text">
                                <h5>
                                    providing all kinds of construction Services
                                </h5>
                                <h1>
                                    <b>Constructing Spaces For You</b>
                                </h1>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="poster-splide-img">
                                <picture>
                                    <source media="(max-width:400px)" srcset="./image/poster-2-m.webp" type="image/webp">
                                    <source media="(max-width:400px)" srcset="./image/poster-2-m.jpg" type="image/jpeg"> <!--1000*1000-->
                                    <source media="(max-width:600px)" srcset="./image/poster-2-t.webp" type="image/webp">
                                    <source media="(max-width:600px)" srcset="./image/poster-2-t.jpg" type="image/jpeg"> <!--1100*900-->
                                    <source media="(max-width:1000px)" srcset="./image/poster-2-d.webp" type="image/webp">
                                    <source media="(max-width:1000px)" srcset="./image/poster-2-d.jpg" type="image/jpeg"> <!--1200*800-->
                                    <source srcset="./image/poster-2.webp" type="image/webp">
                                    <source srcset="./image/poster-2.jpg" type="image/jpeg">
                                    <img src="./image/poster-2.jpg" width="1920" height="940" alt="Banner" />
                                </picture>
                            </div>
                            <div class="banner-text">
                                <h5>
                                    providing all kinds of construction Services
                                </h5>
                                <h1>
                                    <b>Constructing Spaces For You</b>
                                </h1>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="poster-splide-img">
                                <picture>
                                    <source media="(max-width:400px)" srcset="./image/poster-1-m.webp" type="image/webp">
                                    <source media="(max-width:400px)" srcset="./image/poster-1-m.jpg" type="image/jpeg"> <!--1000*1000-->
                                    <source media="(max-width:600px)" srcset="./image/poster-1-t.webp" type="image/webp">
                                    <source media="(max-width:600px)" srcset="./image/poster-1-t.jpg" type="image/jpeg"> <!--1100*900-->
                                    <source media="(max-width:1000px)" srcset="./image/poster-1-d.webp" type="image/webp">
                                    <source media="(max-width:1000px)" srcset="./image/poster-1-d.jpg" type="image/jpeg"> <!--1200*800-->
                                    <source srcset="./image/poster-1.webp" type="image/webp">
                                    <source srcset="./image/poster-1.jpg" type="image/jpeg">
                                    <img src="./image/poster-1.jpg" width="1920" height="940" alt="Banner" />
                                </picture>
                            </div>
                            <div class="banner-text">
                                <h5>
                                    providing all kinds of construction Services
                                </h5>
                                <h1>
                                    <b>Constructing Spaces For You</b>
                                </h1>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--section 3-->
    <section id="success" class="theme-padding success">
        <div class="columns is-multiline is-mobile success-cols">
            <div class="column is-12-mobile is-6-tablet is-6-desktop is-3-widescreen success-col">
                <div class="">
                    <div class="success-25-years">
                        <h1>
                            <b>25</b>
                        </h1>
                        <h3>
                            years
                        </h3>
                        <h5>
                            experience
                        </h5>
                    </div>
                </div>
            </div>
            <div class="column is-12-mobile is-6-tablet is-6-desktop is-3-widescreen success-col">
                <div class="section-title  success-title-text">
                    <span>
                        welcome!
                    </span>
                    <h2 class="section-title-text">
                        secrets of success <p><b> of our projects</b></p>
                    </h2>
                </div>
            </div>
            <div class="column is-12-mobile is-12-tablet is-12-desktop is-6-widescreen success-col">
                <div class="">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi deleniti unde fugiat molestiae eius, nihil nostrum, quidem suscipit neque architecto veritatis quis laborum perspiciatis molestias asperiores sunt doloremque nesciunt incidunt. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi deleniti unde fugiat molestiae eius, nihil nostrum, quidem suscipit neque architecto veritatis quis laborum perspiciatis molestias asperiores sunt doloremque nesciunt incidunt. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi deleniti unde fugiat molestiae eius, nihil nostrum, quidem suscipit neque architecto veritatis quis laborum perspiciatis molestias asperiores sunt doloremque nesciunt incidunt.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- section 4 -->
    <section id="works" class="theme-padding works">
        <div class="columns is-multiline is-mobile is-vcentered works-cols">
            <div class="column is-12-mobile is-12-tablet is-12-desktop is-6-widescreen works-col">
                <div class="section-title">
                    <span>
                        works
                    </span>
                    <h2 class="section-title-text">
                        our done <p><b> projects</b></p>
                    </h2>
                </div>
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique expedita eius aliquid exercitationem laborum unde non sit vel numquam hic, perferendis modi provident consequuntur fugiat quidem nobis impedit placeat! Optio?
                    </p>
                </div>
            </div>
            <div class="column is-12-mobile is-12-tablet is-12-desktop is-6-widescreen works-col">
                <div id="works-slider" class="splide ">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="">
                                    <picture>
                                        <source srcset="./image/building-2.webp" type="image/webp">
                                        <source srcset="./image/building-2.jpg" type="image/jpeg">
                                        <img class="img-fixed-ratio" src="./image/building-2.jpg" width="1200" height="600" alt="Works Slider" />
                                    </picture>
                                </div>
                                <div class="works-text">
                                    <div class="works-text-inner">
                                        <div class="works-text-number">
                                            1
                                        </div>
                                        <div class="works-text-title">
                                            <b>commercial building</b>
                                        </div>
                                    </div>
                                    <h2>
                                        Constructing Spaces For You so you can enjoy your life without tension.
                                    </h2>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="">
                                    <picture>
                                        <source srcset="./image/building-3.webp" type="image/webp">
                                        <source srcset="./image/building-3.jpg" type="image/jpeg">
                                        <img class="img-fixed-ratio" src="./image/building-3.jpg" width="1200" height="600" alt="Works Slider" />
                                    </picture>
                                </div>
                                <div class="works-text">
                                    <div class="works-text-inner">
                                        <div class="works-text-number">
                                            2
                                        </div>
                                        <div class="works-text-title">
                                            <b>residential building</b>
                                        </div>
                                    </div>
                                    <h2>
                                        Constructing Spaces For You so you can enjoy your life without tension.
                                    </h2>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 5 -->
    <section id="counter" class="counter">
        <div class="columns is-multiline is-mobile counter-cols">
            <div class="column is-6-mobile is-3-tablet is-3-desktop is-3-widescreen counter-col">
                <div class="counter-inner">
                    <div class="center counter-circle">
                        <picture>
                            <source srcset="./image/projects.webp" type="image/webp">
                            <source srcset="./image/projects.jpg" type="image/jpeg">
                            <img class="img-fixed-ratio" src="./image/projects.jpg" width="100" height="100" alt="Projects logo" />
                        </picture>
                    </div>
                    <div class="counter-text">
                        <h3>
                            <b>1552</b>
                        </h3>
                        <h5>
                            projects
                        </h5>
                    </div>
                </div>
            </div>
            <div class="column is-6-mobile is-3-tablet is-3-desktop is-3-widescreen counter-col">
                <div class="counter-inner">
                    <div class="center counter-circle">
                        <picture>
                            <source srcset="./image/employees.webp" type="image/webp">
                            <source srcset="./image/employees.jpg" type="image/jpeg">
                            <img class="img-fixed-ratio" src="./image/employees.jpg" width="100" height="100" alt="employees logo" />
                        </picture>
                    </div>
                    <div class="counter-text">
                        <h3>
                            <b>3580</b>
                        </h3>
                        <h5>
                            employees
                        </h5>
                    </div>
                </div>
            </div>
            <div class="column is-6-mobile is-3-tablet is-3-desktop is-3-widescreen counter-col">
                <div class="counter-inner">
                    <div class="center counter-circle">
                        <picture>
                            <source srcset="./image/constructor.webp" type="image/webp">
                            <source srcset="./image/constructor.jpg" type="image/jpeg">
                            <img class="img-fixed-ratio" src="./image/constructor.jpg" width="100" height="100" alt="constructor logo" />
                        </picture>
                    </div>
                    <div class="counter-text">
                        <h3>
                            <b>5987</b>
                        </h3>
                        <h5>
                            constructor
                        </h5>
                    </div>
                </div>
            </div>
            <div class="column is-6-mobile is--tablet is-3-desktop is-3-widescreen counter-col">
                <div class="counter-inner">
                    <div class="center counter-circle">
                        <picture>
                            <source srcset="./image/partner.webp" type="image/webp">
                            <source srcset="./image/partner.jpg" type="image/jpeg">
                            <img class="img-fixed-ratio" src="./image/partner.jpg" width="100" height="100" alt="partners logo" />
                        </picture>
                    </div>
                    <div class="counter-text">
                        <h3>
                            <b>3999</b>
                        </h3>
                        <h5>
                            partners
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 6 -->
    <section id="services" class="theme-padding services">
        <div class="columns is-multiline is-mobile is-vcentered services-cols">
            <div class="column is-12-mobile is-12-tablet is-12-desktop is-4-widescreen services-col">
                <div class="section-title">
                    <span>
                        what we do?
                    </span>
                    <h2 class="section-title-text">
                        we offer <p><b>services</b></p>
                    </h2>
                </div>
                <div>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae voluptatum, velit cum omnis laborum perspiciatis, suscipit ad repudiandae provident ullam aut atque officiis unde ea, officia rerum. Assumenda, facere fugit?
                    </p>
                </div>
            </div>
            <div class="column is-12-mobile is-12-tablet is-12-desktop is-8-widescreen services-col">
                <div class="columns is-multiline is-mobile">
                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen">
                        <div class="services-main">
                            <div class="services-img">
                                <picture>
                                    <source srcset="./image/partners.webp" type="image/webp">
                                    <source srcset="./image/partners.jpg" type="image/jpeg">
                                    <img class="img-fixed-ratio" src="./image/partners.jpg" width="100" height="100" alt="partners logo" />
                                </picture>
                            </div>
                            <div class="services-text">
                                <p>
                                    <b>General Constructing</b>
                                </p>
                                <span>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos explicabo excepturi blanditiis tempore unde veniam molestias dolorem officiis repellendus sed fugiat.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen">
                        <div class="services-main">
                            <div class="services-img">
                                <picture>
                                    <source srcset="./image/partners.webp" type="image/webp">
                                    <source srcset="./image/partners.jpg" type="image/jpeg">
                                    <img class="img-fixed-ratio" src="./image/partners.jpg" width="100" height="100" alt=" logo" />
                                </picture>
                            </div>
                            <div class="services-text">
                                <p>
                                    <b>Design Build</b>
                                </p>
                                <span>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos explicabo excepturi blanditiis tempore unde veniam molestias dolorem officiis repellendus sed fugiat.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen">
                        <div class="services-main">
                            <div class="services-img">
                                <picture>
                                    <source srcset="./image/partners.webp" type="image/webp">
                                    <source srcset="./image/partners.jpg" type="image/jpeg">
                                    <img class="img-fixed-ratio" src="./image/partners.jpg" width="100" height="100" alt=" logo" />
                                </picture>
                            </div>
                            <div class="services-text">
                                <p>
                                    <b>Pre-construction Design</b>
                                </p>
                                <span>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos explicabo excepturi blanditiis tempore unde veniam molestias dolorem officiis repellendus sed fugiat.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen">
                        <div class="services-main">
                            <div class="services-img">
                                <picture>
                                    <source srcset="./image/partners.webp" type="image/webp">
                                    <source srcset="./image/partners.jpg" type="image/jpeg">
                                    <img class="img-fixed-ratio" src="./image/partners.jpg" width="100" height="100" alt=" logo" />
                                </picture>
                            </div>
                            <div class="services-text">
                                <p>
                                    <b>Building Modeling</b>
                                </p>
                                <span>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos explicabo excepturi blanditiis tempore unde veniam molestias dolorem officiis repellendus sed fugiat.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen">
                        <div class="services-main">
                            <div class="services-img">
                                <picture>
                                    <source srcset="./image/partners.webp" type="image/webp">
                                    <source srcset="./image/partners.jpg" type="image/jpeg">
                                    <img class="img-fixed-ratio" src="./image/partners.jpg" width="100" height="100" alt=" logo" />
                                </picture>
                            </div>
                            <div class="services-text">
                                <p>
                                    <b>Construction Services</b>
                                </p>
                                <span>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos explicabo excepturi blanditiis tempore unde veniam molestias dolorem officiis repellendus sed fugiat.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen">
                        <div class="services-main">
                            <div class="services-img">
                                <picture>
                                    <source srcset="./image/partners.webp" type="image/webp">
                                    <source srcset="./image/partners.jpg" type="image/jpeg">
                                    <img class="img-fixed-ratio" src="./image/partners.jpg" width="100" height="100" alt=" logo" />
                                </picture>
                            </div>
                            <div class="services-text">
                                <p>
                                    <b>Construction Management</b>
                                </p>
                                <span>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos explicabo excepturi blanditiis tempore unde veniam molestias dolorem officiis repellendus sed fugiat.
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- section 7 -->
    <section id="blog" class="pb-0 theme-padding blog">
        <div class="columns is-multiline is-mobile is-vcentered blog-cols">
            <div class="column is-12-mobile is-12-tablet is-12-desktop is-4-widescreen blog-col">
                <div class="section-title">
                    <span>
                        Recent Blog
                    </span>
                    <h2 class="section-title-text">
                        Read <p><b>Our Blog</b></p>
                    </h2>
                </div>
                <div>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae voluptatum, velit cum omnis laborum perspiciatis, suscipit ad repudiandae provident ullam aut atque officiis unde ea, officia rerum. Assumenda, facere fugit?
                    </p>
                </div>
            </div>
            <div class="column is-12-mobile is-12-tablet is-12-desktop is-8-widescreen blog-col">
                <div class="blog-main">
                    <div class="blog-img">
                        <picture>
                            <source srcset="./image/sky-high.webp" type="image/webp">
                            <source srcset="./image/sky-high.jpg" type="image/jpeg">
                            <img class="img-fixed-ratio" src="./image/sky-high.jpg" width="100" height="100" alt="City logo" />
                        </picture>
                    </div>
                    <div class="blog-text">
                        <div class="blog-title">
                            <p>
                                <b> - 20 Jan, 2017</b>
                            </p>
                        </div>
                        <div class="blog-desc">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos explicabo excepturi blanditiis tempore unde veniam molestias dolorem officiis repellendus sed fugiat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="blog-main">
                    <div class="blog-img">
                        <picture>
                            <source srcset="./image/sky-high.webp" type="image/webp">
                            <source srcset="./image/sky-high.jpg" type="image/jpeg">
                            <img class="img-fixed-ratio" src="./image/sky-high.jpg" width="100" height="100" alt="City logo" />
                        </picture>
                    </div>
                    <div class="blog-text">
                        <div class="blog-title">
                            <p>
                                <b> - 10 Feb, 2022</b>
                            </p>
                        </div>
                        <div class="blog-desc">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos explicabo excepturi blanditiis tempore unde veniam molestias dolorem officiis repellendus sed fugiat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="blog-main">
                    <div class="blog-img">
                        <picture>
                            <source srcset="./image/sky-high.webp" type="image/webp">
                            <source srcset="./image/sky-high.jpg" type="image/jpeg">
                            <img class="img-fixed-ratio" src="./image/sky-high.jpg" width="100" height="100" alt="City logo" />
                        </picture>
                    </div>
                    <div class="blog-text">
                        <div class="blog-title">
                            <p>
                                <b> - 28 Jan, 1997</b>
                            </p>
                        </div>
                        <div class="blog-desc">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos explicabo excepturi blanditiis tempore unde veniam molestias dolorem officiis repellendus sed fugiat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 8 -->
    <section id="team" class="theme-padding team">
        <div class="columns is-multiline is-mobile is-vcentered team-cols">
            <div class="column is-12-mobile is-6-tablet is-4-desktop is-4-widescreen team-col">
                <div class="team-main-img">
                    <div class="team-img">
                        <picture>
                            <source srcset="./image/men.webp" type="image/webp">
                            <source srcset="./image/men.jpg" type="image/jpeg">
                            <img class="img-fixed-ratio" src="./image/men.jpg" width="500" height="500" alt="Men logo" />
                        </picture>
                    </div>
                    <div class="team-main-title">
                        <div class="team-title">
                            <p><b>Ram sharma</b></p>
                        </div>
                        <div class="team-text">
                            <p>Lead Engineer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-12-mobile is-6-tablet is-4-desktop is-4-widescreen team-col">
                <div class="team-main-img">
                    <div class="team-img">
                        <picture>
                            <source srcset="./image/men.webp" type="image/webp">
                            <source srcset="./image/men.jpg" type="image/jpeg">
                            <img class="img-fixed-ratio" src="./image/men.jpg" width="500" height="500" alt="Men logo" />
                        </picture>
                    </div>
                    <div class="team-main-title">
                        <div class="team-title">
                            <p><b>smith sharma</b></p>
                        </div>
                        <div class="team-text">
                            <p>architect</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-12-mobile is-12-tablet is-4-desktop is-4-widescreen team-col">
                <div class="section-title">
                    <span>
                        Team
                    </span>
                    <h2 class="section-title-text">
                        Our <p><b>Engineers</b></p>
                    </h2>
                </div>
                <div>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae voluptatum, velit cum omnis laborum perspiciatis.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- section 9 -->
    <section id="testimonial" class="theme-padding testimonial">
        <div class="columns is-multiline is-mobile is-vcentered testimonial-cols">
            <div class="column is-12-mobile is-12-tablet is-4-desktop is-4-widescreen testimonial-col">
                <div class="section-title">
                    <span>
                        testimonial
                    </span>
                    <h2 class="section-title-text">
                        What Our <p><b>Client says</b></p>
                    </h2>
                </div>
            </div>
            <div class="column is-12-mobile is-12-tablet is-8-desktop is-8-widescreen testimonial-col">
                <div id="testimonial-slider" class="splide ">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="testimonial-main-quotation">
                                    <div class="testimonial-main">
                                        <div class="testimonial-quotation-img">
                                            <picture>
                                                <source srcset="./image/quotation.webp" type="image/webp">
                                                <source srcset="./image/quotation.png" type="image/png">
                                                <img class="img-fixed-ratio" src="./image/quotation.jpg" width="50" height="50" alt="quotation" />
                                            </picture>
                                        </div>
                                        <div class="testimonial-img">
                                            <picture>
                                                <source srcset="./image/men.webp" type="image/webp">
                                                <source srcset="./image/men.jpg" type="image/jpeg">
                                                <img class="img-fixed-ratio" src="./image/men.jpg" width="500" height="500" alt="testimonial Slider" />
                                            </picture>
                                        </div>
                                        <div class="testimonial-text-inner">
                                            <div class="testimonial-text-name">
                                                <p><b>Adam shah</b></p>
                                            </div>
                                            <div class="testimonial-text">
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim rerum nisi ipsum eveniet. Earum atque tempore repellendus consectetur eaque nobis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="testimonial-main-quotation">
                                    <div class="testimonial-main">
                                        <div class="testimonial-quotation-img">
                                            <picture>
                                                <source srcset="./image/quotation.webp" type="image/webp">
                                                <source srcset="./image/quotation.png" type="image/png">
                                                <img class="img-fixed-ratio" src="./image/quotation.jpg" width="50" height="50" alt="quotation" />
                                            </picture>
                                        </div>
                                        <div class="testimonial-img">
                                            <picture>
                                                <source srcset="./image/men.webp" type="image/webp">
                                                <source srcset="./image/men.jpg" type="image/jpeg">
                                                <img class="img-fixed-ratio" src="./image/men.jpg" width="500" height="500" alt="testimonial Slider" />
                                            </picture>
                                        </div>
                                        <div class="testimonial-text-inner">
                                            <div class="testimonial-text-name">
                                                <p><b>ram smith</b></p>
                                            </div>
                                            <div class="testimonial-text">
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim rerum nisi ipsum eveniet. Earum atque tempore repellendus consectetur eaque nobis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 10 -->
    <section id="newsletter" class="newsletter">
        <div class="theme-padding">
            <div class="dark section-title ">
                <h2>
                    <p class="dark">Sign up for a newsletter</p>
                </h2>
            </div>
            <div class="columns is-multiline is-mobile newsletter-cols">
                <div class="column is-12-mobile is-6-tablet is-6-desktop is-6-widescreen newsletter-col">
                    <div class="dark">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim rerum nisi ipsum eveniet. Earum atque tempore repellendus consectetur eaque nobis.</p>
                    </div>
                </div>
                <div class="column is-12-mobile is-6-tablet is-6-desktop is-6-widescreen newsletter-col">
                    <div class="newsletter-email-input">
                        <div class="newsletter-input">
                            <input class="input input-email" type="email" placeholder="Enter your E-mail " value="">
                        </div>
                        <button class="button-arrow">
                            <p>Subscribe</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section 11 -->
    <section id="footer" class="theme-padding contect-footer">
        <div class="footer-main">
            <div class="columns is-multiline is-mobile footer-cols">
                <div class="column is-12-mobile is-6-tablet is-6-desktop is-3-widescreen footer-col">
                    <div class="footer-title">
                        <h4>About Company</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, eius possimus quisquam inventore repellendus molestias quibusdam tempore adipisci quis ad ab beatae impedit? Ipsum, earum? Modi corporis velit consectetur pariatur.
                        </p>
                        <div class="footer-main-img">
                            <div class="footer-img">
                                <a href="https://www.facebook.com/" target=”_blank”>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fdd017" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="footer-img">
                                <a href="https://twitter.com/" target=”_blank”>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fdd017" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="footer-img">
                                <a href="https://www.instagram.com/" target=”_blank”>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fdd017" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg></a>
                            </div>
                            <div class="footer-img">
                                <a href="https://www.linkedin.com/" target=”_blank”>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fdd017" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                        <rect x="2" y="9" width="4" height="12"></rect>
                                        <circle cx="4" cy="4" r="2"></circle>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-12-mobile is-6-tablet is-6-desktop is-3-widescreen footer-col">
                    <div class="footer-title">
                        <h4>Recent blog</h4>
                        <div>
                            <span>- 20 Jan 2022</span>
                            <p>
                                Lorem ipsum dolor sit amet consectetur.
                            </p>
                        </div>
                        <div>
                            <span>- 20 May 2022</span>
                            <p>
                                Lorem ipsum dolor sit amet consectetur amet consectetur.
                            </p>
                        </div>
                        <div>
                            <span>- 28 Jan 2023</span>
                            <p>
                                Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="column is-12-mobile is-6-tablet is-6-desktop is-3-widescreen footer-col">
                    <div class="footer-title">
                        <h4>Information</h4>
                        <ul class="footer-list-main">
                            <li class="footer-list">
                                <a href="./">
                                    <p>Our Company</p>
                                </a>
                            </li>
                            <li class="footer-list">
                                <a href="./">
                                    <p>Certification</p>
                                </a>
                            </li>
                            <li class="footer-list">
                                <a href="./">
                                    <p>Our Services</p>
                                </a>
                            </li>
                            <li class="footer-list">
                                <a href="./">
                                    <p>Career</p>
                                </a>
                            </li>
                            <li class="footer-list">
                                <a href="./">
                                    <p>Core Value</p>
                                </a>
                            </li>
                            <li class="footer-list">
                                <a href="./">
                                    <p>Company History</p>
                                </a>
                            </li>
                            <li class="footer-list">
                                <a href="./">
                                    <p>FAQ</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="column is-12-mobile is-6-tablet is-6-desktop is-3-widescreen footer-col">
                    <div class="footer-title">
                        <h4>Contact info</h4>
                        <p>
                            291 South 21th Street, Suite 721 New York NY 10016
                        </p>
                        <div class="footer-information-main">
                            <picture>
                                <source srcset="./image/phone-call.webp" type="image/webp">
                                <source srcset="./image/phone-call.jpg" type="image/jpg">
                                <img src="./image/phone-call.jpg" alt="phone call Image" width="20px" height="20px">
                            </picture>
                            <a href="tel:+91 1235 2355 98">
                                <p>
                                    1235 2355 98
                                </p>
                            </a>
                        </div>
                        <div class="footer-information-main">
                            <picture>
                                <source srcset="./image/email.webp" type="image/webp">
                                <source srcset="./image/email.jpg" type="image/jpg">
                                <img src="./image/email.jpg" alt="email Image" width="20px" height="20px">
                            </picture>
                            <a href="mailto: info@yoursuite.com">
                                <p>
                                    info@yoursuite.com
                                </p>
                            </a>
                        </div>
                        <div class="footer-information-main">
                            <picture>
                                <source srcset="./image/global.webp" type="image/webp">
                                <source srcset="./image/global.jpg" type="image/jpg">
                                <img src="./image/global.jpg" alt="global Image" width="20px" height="20px">
                            </picture>
                            <a href="./">
                                <p>
                                    yourwebsite.com
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <p>
                    Copyright &copy; 2023 All right reserved.
                </p>
                <p>
                    This template is made with &#10084; by <a href="https://colorlib.com/" target=”_blank”> <span> Colorlib</span> </a>
                </p>
            </div>
        </div>
    </section>

    <script src="./js/custom.js"></script>
</body>

</html>