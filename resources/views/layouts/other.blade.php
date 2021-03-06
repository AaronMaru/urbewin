<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Urbewin</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/other.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-shrink menu" id="mainNav">
        <div class="container-fluid">
            <a href="/">
                <img src="{{ url('images/new_logo/blue.png') }}" width="50" height="50px" id="logo">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/">{{ trans('file.menu_home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/news">{{ trans('file.menu_news') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/app">{{ trans('file.menu_app') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/community">{{ trans('file.menu_community') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/join-us">{{ trans('file.menu_join_us') }}</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link js-scroll-trigger">|</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{ App::getLocale()=='zh' ? '中文' : 'ENG' }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="javascript:submitLang('zh')">中文</a>
                          <a class="dropdown-item" href="javascript:submitLang('en')">ENG</a>
                        </div>
                        <form action="language" method="post" id="language">
                            <input type="hidden" name="locale" id="locale"/>
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <section class="section_6">
        <div class="container my-auto">

            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-2 mx-auto text-center">
                    <img src="{{ url('img/index/WeChat.jpg') }}" class="img-fluid" height="100px">
                    <p class="text-faded text-blue mb-5">{{ trans('file.wechat') }}</p>
                </div>
                <div class="col-lg-2 mx-auto text-center">
                    <img src="{{ url('img/index/fb.jpg') }}" class="img-fluid" height="100px">
                    <p class="text-faded text-blue mb-5">Facebook</p>
                </div>
                <div class="col-lg-2 mx-auto text-center">
                    <img src="{{ url('img/index/Twitter.jpg') }}" class="img-fluid" height="100px">
                    <p class="text-faded text-blue mb-5">Twitter</p>
                </div>
                <div class="col-lg-2 mx-auto text-center">
                    <img src="{{ url('img/index/telegram.jpg') }}" class="img-fluid" height="100px">
                    <p class="text-faded text-blue mb-5">Telegram</p>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-10 col-12" id="footer">
                            <div class="row">
                                <img src="{{ url('images/new_logo/blue.png') }}" width="25px" height="40px">
                                <p class="text-center footer-left footer-text">© U are beWiN Team. 2018</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12 d-flex justify-content-center">
                            <div class="pull-right">
                                <div class="row footer-right">
                                    <a href="javascript:submitLang('zh')" class="lang">中文</a>
                                    <p class="lang">|</p>
                                    <a href="javascript:submitLang('en')" class="lang">ENG</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    {{-- <script src="vendor/jquery/jquery.min.js"></script>{{ asset('css/other.css') }} --}}
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/scrollreveal/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/creative1.js') }}"></script>
    <script>
        function submitLang(lang) {
            $('#locale').val(lang);
            $('#language').submit();
        }
    </script>
</body>

</html>
