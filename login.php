<?php
include './include/db.php';
?>
<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Key Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/style2.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <!-- //fonts -->
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- Google fonts -->
    
<!--    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>




</head>
<!-- //Head -->
<!-- Body -->

<body>

    <section class="main">
        <div class="layer">


        </div>
        <div class="content-w3ls">
           <center><img src="./images/iitlogo.png" width="125px"></center> 

            <div class="content-bottom">
                <form method="post">
                    <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input id="enrol" name="enrol" type="text" placeholder="Enrollment No." required>
                        </div>
                    </div>
                    <div class="field-group">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input id="password" name="password" type="Password" placeholder="Password">
                        </div>
                    </div>
                    <div class="wthree-field">
                        <button type="submit" class="btn" name="but_submit" id="but_submit">Get Started</button>
                    </div>
                    <br>
                    <ul class="list-login-bottom">
                        <center>
                        <li class="">
                            <a href="register.php" class="">Create Account</a>
                        </li>
                        </center>
                    </ul>
                </form>
            </div>
        </div>


    </section>

<!--
    <script type="text/javascript">
        $(document).ready(function() {

            $("#submit").click(function() {
                var enrol = $("#enrol").val().trim();
                var password = $("#password").val().trim();
                if (enrol!= "" && password!= "") {
                    $.ajax({

                        url: 'check.php',
                        type: 'post',
                        data: {
                            enrol: enrol,
                            password: password
                        },
                        success: function(response) {
                            var msg = "";
                            if (response == 1) {
                                window.location = "index.php";
                                msg = "Successful";
                            } 
                            else {
                                alert("hello");
                                msg = 'Incorrect credentials';
                            }
//                            $("#message").html(msg);
                            alert(msg);
                        }

                    });
                }
            });
        });

    </script>
-->
    <script type="text/javascript">
            $(document).ready(function(){

                $("#but_submit").click(function(){
                    var enrol = $("#enrol").val().trim();
                    var password = $("#password").val().trim();
                    

                    if( enrol != "" && password != "" ){
                        $.ajax({
                            url:'check.php',
                            type:'post',
                            data:{enrol:enrol,password:password},
                            success:function(response){
                                
                                var msg = "";
                                if(response == 1){
                                    
                                    window.location = "index.php";
                                    msg = "Login Successful";
                                }
                                else{
                                    msg = "Invalid credentials!";
                                }
                                alert(msg);
                            }
                        });
                    }
                });

            });
        </script>

</body>
<!-- //Body -->

</html>
