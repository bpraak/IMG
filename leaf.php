<?php
include './include/db.php';

?>
<!DOCTYPE html>
<html lang="zxx">

<head>


    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Red leaf comingsoon Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <style>
        #image {
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background:no-repeat center;
        }
        .home {
            margin:20px 20px 20px 20px;
        }

    </style>
</head>

<body>

    <div class="Coming-block">

        <div class="page">
            <header class="mh-fullscreen">
                <div class="content">
                    <div class="logo">

                    </div>

                    <div class="w3l-coming-soon-page">
                        <div class="coming-block">
                            <h1>EndGem</h1>

                            <p>We are almost there, Stay tuned for something amazing!!</p>
                            <a href="login.php" class="home">Sign In</a>
                            <a href="register.php" class="home">Register</a>
                        </div>
                    </div>
                    <div class="copy-right text-center">

                    </div>
                </div>
                <img src="images/iit.jpg" alt="error image" id="image">
            </header>
        </div>


        <script src="js/jquery-3.3.1.min.js"></script>

        <script>
            var lFollowX = 0,
                lFollowY = 0,
                x = 0,
                y = 0,
                friction = 1 / 30;

            function animate() {
                x += (lFollowX - x) * friction;
                y += (lFollowY - y) * friction;

                translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

                $('img').css({
                    '-webit-transform': translate,
                    '-moz-transform': translate,
                    'transform': translate
                });

                window.requestAnimationFrame(animate);
            }

            $(window).on('mousemove click', function(e) {

                var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
                var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
                lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
                lFollowY = (10 * lMouseY) / 100;

            });

            animate();

        </script>
    </div>
</body>

</html>
