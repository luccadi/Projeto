<!DOCTYPE html>
<html>

<head>
    <title>Login | Josh Admin Template</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link rel="stylesheet" type="text/css" href="../css/pages/login.css" />
    <!-- end of page level css -->
</head>

<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div id="container_demo">
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="toforgot"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form action="index.php" autocomplete="on" method="post">
                                <h3 class="black_bg">
                                    <img src="../img/logo.png" alt="josh logo">
                                    <br>Log in</h3>
                                <p>
                                    <label style="margin-bottom:0px;" for="username" class="uname"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        E- mail or Username
                                    </label>
                                    <input id="username" name="username" required type="text" placeholder="username or e-mail" />
                                </p>
                                <p>
                                    <label style="margin-bottom:0px;" for="password" class="youpasswd"> <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Password
                                    </label>
                                    <input id="password" name="password" required type="password" placeholder="eg. X8df!90EO" />
                                </p>
                                <p class="keeplogin">
                                    <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                                    <label for="loginkeeping">
                                        Keep me logged in
                                    </label>
                                </p>
                                <p class="login button">
                                    <input type="submit" value="Login" class="btn btn-success" />
                                </p>
                                <p class="change_link">
                                    <a href="#toforgot">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-warning btn-sm">
                                            Forgot password
                                        </button>
                                    </a>
                                    <a href="#toregister">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-success btn-sm" style="float:right;">Sign up</button>
                                    </a>
                                </p>
                            </form>
                        </div>
                        <div id="register" class="animate form">
                            <form action="index.php" autocomplete="on" method="post">
                                <h3 class="black_bg">
                                    <img src="../img/logo.png" alt="josh logo">
                                    <br>Sign Up</h3>
                                <p>
                                    <label style="margin-bottom:0px;" for="usernamesignup" class="uname">
                                        <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Username
                                    </label>
                                    <input id="usernamesignup" name="usernamesignup" required type="text" placeholder="mysuperusername690" />
                                </p>
                                <p>
                                    <label style="margin-bottom:0px;" for="emailsignup" class="youmail">
                                        <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        E-mail
                                    </label>
                                    <input id="emailsignup" name="emailsignup" required type="email" placeholder="mysupermail@mail.com" />
                                </p>
                                <p>
                                    <label style="margin-bottom:0px;" for="passwordsignup" class="youpasswd">
                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Password
                                    </label>
                                    <input id="passwordsignup" name="passwordsignup" required type="password" placeholder="eg. X8df!90EO" />
                                </p>
                                <p>
                                    <label style="margin-bottom:0px;" for="passwordsignup_confirm" class="youpasswd">
                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Confirm Password
                                    </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required type="password" placeholder="eg. X8df!90EO" />
                                </p>
                                <p class="signin button">
                                    <input type="submit" class="btn btn-success" value="Sign up" />
                                </p>
                                <p class="change_link">
                                    <a href="#tologin" class="to_register">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-warning btn-sm">Back</button>
                                    </a>
                                </p>
                            </form>
                        </div>
                        <div id="forgot" class="animate form">
                            <form action="index.php" autocomplete="on" method="post">
                                <h3 class="black_bg">
                                    <img src="../img/logo.png" alt="josh logo">Password</h3>
                                <p>
                                    Enter your email address below and we'll send a special reset password link to your inbox.
                                </p>
                                <p>
                                    <label style="margin-bottom:0px;" for="emailsignup1" class="youmai">
                                        <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Your email
                                    </label>
                                    <input id="emailsignup1" name="emailsignup" required type="email" placeholder="your@mail.com" />
                                </p>
                                <p class="login button">
                                    <input type="submit" value="Login" class="btn btn-success" />
                                </p>
                                <p class="change_link">
                                    <a href="#tologin" class="to_register">
                                        <button type="button" class="btn btn-responsive botton-alignment btn-warning btn-sm">Back</button>
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="../js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <!--livicons-->
    <script src="../vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
    <script src="../vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
    <script src="../js/josh.js" type="text/javascript"></script>
    <script src="../js/metisMenu.js" type="text/javascript"></script>
    <script src="../vendors/holder-master/holder.js" type="text/javascript"></script>
    <!-- end of global js -->
</body>
</html>