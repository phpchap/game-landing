<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Ravis Adventure</title>
    <meta name="description" content="Ravis Adventure">
    <meta name="keywords" content="Ravis Adventure"/>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="css/social-buttons.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style>
        img {

            border: 0px !important;
            outline: 0 !important;

        }
        #appbox_logo {
            display: block;
            width: 233px;
            height: 35px;
            margin-top: 5px;
            background: url('http://www.appboxmedia.com/images/flip.png') top no-repeat;
            text-indent: -99999px;
        }

        #apple_soon {
            background: url('img/btn/app_store-180x209.png') top no-repeat;
            display: block;
            width: 180px;
            height: 62px;
            border: 0px !important; z-index:100; padding:0px;
            text-indent: -99999px;
            float: left;
        }

        #google_soon {
            background: url('img/btn/app_store-180x209.png') top no-repeat;
            display: block;
            width: 180px;
            height: 62px;
            border: 0px !important; z-index:100; padding:0px;
            text-indent: -99999px;
            float: left;
            margin-left: 0px;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="span4 offset1">
            <div class="iphone">
                <div id="carousel-screenshots" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="active item"><img
                                src="img/scr/ravi-launch.png"/></div>
                    </div>
                </div>
            </div>
            <div class="carousel-nav">
                <a href="#" data-to="0" class="active">1</a>
            </div>
        </div>
        <div class="span6">
            <img src="img/ravi-logo.png" alt="Ravi's Adventure"/>
            <div id="features">
                <ul id="features-tab" class="nav nav-tabs">
                    <li class="active">
                        <h3>Ravis Adventures will be launching soon!</h3>
                        <p>Register your interest below and be the first to
                            travel with Ravi on his many adventures</p>
                    </li>
                </ul>
                <div id="myTabContent">
                    <div class="tab-pane fade active in" id="about">
                        <form id="notify" action="#" class="form-horizontal" method="POST">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label" for="input02">E-mail:</label>

                                    <div class="controls">
                                        <input type="email" class="input-xlarge"
                                               name="email" id="input02">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input id="submit" type="submit" class="btn btn-success" value="Notify when Ravi is ready">
                                </div>
                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
            <div id="apple_soon"></div>
            <div id="google_soon"/></div>
        <p style="margin-top:25px;font-weight: bold;" class="pull-right">Developed By: <a id="appbox_logo"
                                               href="http://www.appboxmedia.com"
                                               target="_blank">ff</a></p>

        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-carousel.js"></script>
<script src="js/custom.js"></script>
</body>

</html>

