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
    <meta name="keywords" content="Key Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartname Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
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

    <style>
        .content-bottom {

            padding-left: 500px;
            padding-right: 500px;
        }

        select {
            padding: 10px 0 10px 15px;
            font-size: 17px;
            font-weight: 300;
            color: #ddd;
            letter-spacing: 1px;
            border: none;
            background: transparent;
            box-sizing: border-box;
            font-family: 'Mukta', sans-serif;
            width: 100%;
            outline: none;
        }

    </style>




</head>
<!-- //Head -->
<!-- Body -->

<body>

    <section class="main" style="overflow: hidden;">
        <div class="layer">


        </div>
        <div class="content-w3ls" >
            <center><img src="./images/iitlogo.png" width="125px" ></center>

            <div class="container">
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
                            <input id="password" ame="password" type="Password" placeholder="Password">
                        </div>
                    </div>
                    <div class="field-group">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input id="passwordConfirm" name="passwordConfirm" type="Password" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input id="name" name="name" type="text" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <div class="field-group">
                                <select id="branch_id" name="branch_id" class="form-control" placeholder="Branch">
                                    <option value disabled selected>Branch</option>
                                    <?php
                                        $query="SELECT * FROM `branch`";
                                        $data=mysqli_query($conn,$query);
                                        while($row=mysqli_fetch_array($data))
                                        {
                                            $id=$row['branch_id'];
                                            if ($id ==0)
                                            {
                                                continue;
                                            }
                                        ?>
                                    <option value="<?php echo $row['branch_id'];?>"><?php echo $row['branch_name'];?></option>
                                    <?php }?>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="wthree-field">
                        <button type="submit" class="btn" name="register" id="register">Register</button>
                    </div>
                    <br>
                    <ul class="list-login-bottom">
                        <center>
                            <li class="">
                                <a href="login.php" class="">Sign In</a>
                            </li>
                        </center>
                    </ul>

                </form>
            </div>
        </div>






    </section>



    <script>
        $(document).ready(function() {

            $('#register').on('click', function() {
                //                    if(checkPassword(form)){
                $("#register").attr("disabled", "disabled");
                var enrol = $('#enrol').val();
                var password = $('#password').val();
                var name = $('#name').val();
                var branch_id = $('#branch_id').val();
                if (enrol != "" && password != "" && name != "" && branch_id != "") {
                    $.ajax({
                        url: "save.php",
                        type: "POST",
                        data: {
                            enrol: enrol,
                            password: password,
                            name: name,
                            branch_id: branch_id
                        },
                        cache: false,
                        success: function(response) {
                            //                                                                alert(response);

                            if (response == 1) {
                                $("#register").removeAttr("disabled");
                                $('#fupForm').find('input:text').val('');
                                alert("Registration Successful");
                                window.location = "login.php";

                            } else if (response == 0) {
                                alert("Error occured !");
                            }

                        }
                    });
                } else {
                    alert('Please fill all the field !');
                }
                //                    }//
            });
        });

    </script>

    <!--validator js-->
    <script src="js/validator.min.js"></script>
    <!--//validator js-->


</body>
<!-- //Body -->

</html>
