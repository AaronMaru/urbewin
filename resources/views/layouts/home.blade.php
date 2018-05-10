<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Urbewin</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/creative.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top menu" id="mainNav">
        <div class="container">
            <img src="{{ url('images/new_logo/white.png') }}" width="50" height="50px" id="logo" class="img-fluid">
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
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{ App::getLocale()=='zh' ? '中文' : 'ENG' }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">中文</a>
                          <a class="dropdown-item" href="#">ENG</a>
                        </div>
                    </li> -->
                     <li class="nav-item">
                       <a class="nav-link js-scroll-trigger">|</a>
                    </li>
                   <li class="nav-item">
                       <form action="language" method="post" id="language">
                           <select name="locale" id="locale" class="form-control change-language">
                               <option value="zh" {{ App::getLocale()=='zh' ? ' selected' : '' }}>中文</option>
                               <option value="en" {{ App::getLocale()=='en' ? ' selected' : '' }}>ENG</option>
                           </select>
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
                <div class="col-lg-12 mx-auto text-center">
                    <p class="text-faded section-heading mb-5">{{ trans('file.home_section_six') }}</p>
                </div>
            </div>
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
            <div class="pull-left">
                <div class="row">
                    <img src="{{ url('images/navigation_bar_and_bottom/buttom_logo.png') }}" width="50px" height="25spx">
                    <p class="text-center footer-left">© U are beWiN Team. 2018</p>
                </div>
            </div>
            <div class="pull-right">
                <div class="row footer-right">
                    <a href="" class="lang">中文</a>
                    <p class="lang">|</p>
                    <a href="" class="lang">ENG</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/creative.js"></script>
</body>

</html>
