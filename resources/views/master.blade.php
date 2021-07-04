<!DOCTYPE html>
<html style="font-size: 16px">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="keywords" content="Our Band Story" />
    <meta name="description" content="" />
    <meta name="page_type" content="np-template-header-footer-from-plugin" />
    <link rel="stylesheet" href="{{ asset('CSS/nicepage.css') }}" media="screen" />
    @yield('title')
    <style type="text/css">
        @font-face {
            font-family: BillSmithDemo;
            src: url("{{ asset('fonts/BillSmithDemo.ttf') }}");
        }
        </style>
    <script class="u-script" type="text/javascript" src="{{ asset('JS/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('JS/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 3.13.1, nicepage.com" />

    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" />

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "ourbandstory",
            "url": "index.html"
        }

    </script>
    <meta property="og:title" content="Register" />
    <meta property="og:type" content="website" />
    <meta name="theme-color" content="#478ac9" />
    <link rel="canonical" href="index.html" />
    <meta property="og:url" content="index.html" />
</head>

<body data-home-page="Register.html" data-home-page-title="Register" class="u-body">
    <header class="u-clearfix u-header u-header" id="sec-8e92">
        <div class="u-clearfix u-sheet u-sheet-1">
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px">
                    <a class="
                                u-button-style
                                u-custom-left-right-menu-spacing
                                u-custom-padding-bottom
                                u-custom-text-hover-color
                                u-custom-top-bottom-menu-spacing
                                u-nav-link
                                u-text-active-palette-1-base
                                u-text-hover-palette-2-base
                            " href="#">
                        <svg>
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px">
                                    <rect y="1" width="16" height="2"></rect>
                                    <rect y="7" width="16" height="2"></rect>
                                    <rect y="13" width="16" height="2"></rect>
                                </symbol>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-unstyled u-nav-1">
                        @if (Auth::check())
                        <li class="u-nav-item">
                            <a class="
                                        u-button-style
                                        u-nav-link
                                        u-text-active-palette-1-base
                                        u-text-hover-palette-1-base
                                    " href="{{ route('admin.index') }}" style="padding: 10px 20px">Dashboard</a>
                        </li>

                        @endif
                        <li class="u-nav-item">
                            <a class="
                                        u-button-style
                                        u-nav-link
                                        u-text-active-palette-1-base
                                        u-text-hover-palette-1-base
                                    " href="{{ route('about-us') }}" style="padding: 10px 20px">Tentang Kami</a>
                        </li>
                        <li class="u-nav-item">
                            <a class="
                                        u-button-style
                                        u-nav-link
                                        u-text-active-palette-1-base
                                        u-text-hover-palette-1-base
                                    " href="{{ route('contact') }}" style="padding: 10px 20px">Kontak</a>
                        </li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="
                                u-black
                                u-container-style
                                u-inner-container-layout
                                u-opacity
                                u-opacity-95
                                u-sidenav
                            ">
                        <div class="u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="
                                        u-align-center
                                        u-nav
                                        u-popupmenu-items
                                        u-unstyled
                                        u-nav-2
                                    ">
                                <li class="u-nav-item">
                                    <a class="u-button-style u-nav-link" href="Tentang-Kami.html"
                                        style="padding: 10px 20px">Tentang Kami</a>
                                </li>
                                <li class="u-nav-item">
                                    <a class="u-button-style u-nav-link" href="Kontak.html"
                                        style="padding: 10px 20px">Kontak</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="
                                u-black u-menu-overlay u-opacity u-opacity-70
                            "></div>
                </div>
            </nav>
            <h1 class="u-text u-text-1">
                <a class="
                            u-btn
                            u-button-link
                            u-button-style
                            u-none
                            u-text-palette-5-dark-2
                            u-btn-1
                        " href="{{ route('index') }}" data-page-id="2056122640">Our Band Story</a>
            </h1>
        </div>
    </header>
    @yield('content')
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-b3d2">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">
                FOR YOUR PERFECT MUSIC EXPERIENCE
            </p>
        </div>
    </footer>
</body>

</html>
