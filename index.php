<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Authorization</title>
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" >
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="bootstrap-3.3.7-dist/css/bootstrap-social.css" rel="stylesheet" />
    <link href="css/authoriz.css" rel="stylesheet" />
    <script src="//ulogin.ru/js/ulogin.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="center-block">
            <img src="images/33333.png" class="img-responsive">
            <div class="authoris_panel">
                <div id="uLogin" class="btn-group authoriz" data-ulogin="display=buttons;fields=first_name,last_name,photo;
            redirect_uri=http://drawingroom.loc/">
                    <a id="btn_vk" class="btn btn-social btn-vk btn_author" data-uloginbutton = "vkontakte">
                        <span class="fa fa-vk"></span> Sign in with Vkontakte
                    </a>

                    <a id="btn_facebook" class="btn btn-social btn-facebook btn_author" data-uloginbutton = "facebook">
                        <span class="fa fa-facebook"></span> Sign in with Facebook
                    </a>

                    <a id="btn_twitter" class="btn btn-social btn-twitter" data-uloginbutton = "twitter">
                        <span class="fa fa-twitter"></span> Sign in with Twitter
                    </a>
                </div>
                <?php
                include "Authorize.php";
                $d = new Authorize();
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>