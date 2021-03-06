<!DOCTYPE html>
<html lang="zh-Hant-TW">
    <head>
        <title><?php echo $title?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>

        <link rel="shortcut icon" type="image/png" href="/images/Logo.png"/>
        <link rel="stylesheet" href="/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" href="/css/logo-nav.css"/>
        <link rel="stylesheet" href="/css/footer.css"/>
        <link rel="stylesheet" href="/css/styles.css"/>

        <script type="text/javascript"></script>
        <!-- jQuery -->
        <script src="/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/toggle.js"></script>

    </head>
        <body>

            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div id="header_wrap" class="container">
                    <div id="header" class="grid">
                        <div id="nav" class="row">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="/">
                                    <img src="/images/Logo.png" alt="logo" width="40px" height="40px">
                                </a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navtext">
                                    <li>
                                        <a href="/about">關於我們</a>
                                    </li>
                                    <li>
                                        <a href="/news">新聞</a>
                                    </li>
                                    <li>
                                        <a href="/product">產品</a>
                                    </li>
                                    <li>
                                        <a href="/contact">聯絡我們</a>
                                    </li>
                                </ul>
                                <ul id="headerSignin" class="nav navbar-nav navbar-right navtext">
                                    <li>
                                        <a href="/sign_in" id="signin_link"><span class="glyphicon glyphicon-log-in"></span> 登入</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
