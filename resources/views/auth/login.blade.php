<!DOCTYPE html>
<html>
<head>
    <title>Sign in | NoThanks - Flat Administration Template</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta content='text/html;charset=utf-8' http-equiv='content-type'>
    <meta content='Flat administration template for Twitter Bootstrap. Twitter Bootstrap 3 template with Ruby on Rails support.' name='description'>
    <link href='/images/meta_icons/favicon.ico' rel='shortcut icon' type='image/x-icon'>
    <link href='/images/meta_icons/apple-touch-icon.png' rel='apple-touch-icon-precomposed'>
    <link href='/images/meta_icons/apple-touch-icon-57x57.png' rel='apple-touch-icon-precomposed' sizes='57x57'>
    <link href='/images/meta_icons/apple-touch-icon-72x72.png' rel='apple-touch-icon-precomposed' sizes='72x72'>
    <link href='/images/meta_icons/apple-touch-icon-114x114.png' rel='apple-touch-icon-precomposed' sizes='114x114'>
    <link href='/images/meta_icons/apple-touch-icon-144x144.png' rel='apple-touch-icon-precomposed' sizes='144x144'>
    <!-- / START - page related stylesheets [optional] -->

    <!-- / END - page related stylesheets [optional] -->
    <!-- / bootstrap [required] -->
    <link href="/stylesheets/bootstrap/bootstrap.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / theme file [required] -->
    <link href="/stylesheets/light-theme.css" media="all" id="color-settings-body-color" rel="stylesheet" type="text/css" />
    <!-- / coloring file [optional] (if you are going to use custom contrast color) -->
    <link href="/stylesheets/theme-colors.css" media="all" rel="stylesheet" type="text/css" />
    <!-- / demo file [not required!] -->
    <link href="/stylesheets/demo.css" media="all" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
    <script src="/javascripts/ie/html5shiv.js" type="text/javascript"></script>
    <script src="/javascripts/ie/respond.min.js" type="text/javascript"></script>
    <![endif]-->
</head>
<body class='contrast-red login contrast-background'>
<div class='middle-container'>
    <div class='middle-row'>
        <div class='middle-wrapper'>
            <div class='login-container-header'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-sm-12'>
                            <div class='text-center'>
                                NoThanks
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='login-container'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-sm-4 col-sm-offset-4'>
                            <h1 class='text-center title'>Sign in</h1>
                            <form action='/auth/login' class='validate-form' method='post'>
                                {!! csrf_field() !!}
                                <div class='form-group'>
                                    <div class='controls with-icon-over-input'>
                                        <input value="" placeholder="E-mail" class="form-control" data-rule-required="true" name="email" type="text" />
                                        <i class='icon-user text-muted'></i>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <div class='controls with-icon-over-input'>
                                        <input value="" placeholder="Password" class="form-control" data-rule-required="true" name="password" type="password" />
                                        <i class='icon-lock text-muted'></i>
                                    </div>
                                </div>
                                <div class='checkbox'>
                                    <label for='remember_me'>
                                        <input id='remember_me' name='remember_me' type='checkbox' value='1'>
                                        Remember me
                                    </label>
                                </div>
                                <button class='btn btn-block'>Sign in</button>
                            </form>
                            <div class='text-center'>
                                <hr class='hr-normal'>
                                <a href='forgot_password.html'>Forgot your password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='login-container-footer'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-sm-12'>
                            <div class='text-center'>
                                <a href='sign_up.html'>
                                    <i class='icon-user'></i>
                                    New to NoThanks?
                                    <strong>Sign up</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / jquery [required] -->
<script src="/javascripts/jquery/jquery.min.js" type="text/javascript"></script>
<!-- / jquery mobile (for touch events) -->
<script src="/javascripts/jquery/jquery.mobile.custom.min.js" type="text/javascript"></script>
<!-- / jquery migrate (for compatibility with new jquery) [required] -->
<script src="/javascripts/jquery/jquery-migrate.min.js" type="text/javascript"></script>
<!-- / jquery ui -->
<script src="/javascripts/jquery/jquery-ui.min.js" type="text/javascript"></script>
<!-- / jQuery UI Touch Punch -->
<script src="/javascripts/plugins/jquery_ui_touch_punch/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<!-- / bootstrap [required] -->
<script src="/javascripts/bootstrap/bootstrap.js" type="text/javascript"></script>
<!-- / modernizr -->
<script src="/javascripts/plugins/modernizr/modernizr.min.js" type="text/javascript"></script>
<!-- / retina -->
<script src="/javascripts/plugins/retina/retina.js" type="text/javascript"></script>
<!-- / theme file [required] -->
<script src="/javascripts/theme.js" type="text/javascript"></script>
<!-- / demo file [not required!] -->
<script src="/javascripts/demo.js" type="text/javascript"></script>
<!-- / START - page related files and scripts [optional] -->
<script src="/javascripts/plugins/validate/jquery.validate.min.js" type="text/javascript"></script>
<script src="/javascripts/plugins/validate/additional-methods.js" type="text/javascript"></script>
<!-- / END - page related files and scripts [optional] -->
</body>
</html>
