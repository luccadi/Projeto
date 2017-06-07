
<!DOCTYPE html>
<html>

    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- global level css -->
        <link href="View/elementos/css/bootstrap.min.css" rel="stylesheet" />
        <!-- end of global level css -->
        <!-- page level css -->
        <link rel="stylesheet" type="text/css" href="View/elementos/css/pages/login.css" />
        <!-- end of page level css -->
    </head>




    <body>

<?php
if (isset($_GET['msgWrong'])){
?>    
   <div class="container">   
       <center>
           <h3>Registro funcional ou senha errada!</h3></center>
        <center>
           <h3>Se você esqueceu a senha e o login contate o administrador!</h3></center>
   </div>
  <?php 
}


?>
        <div class="container">
            <div class="row vertical-offset-100">
                <div class="col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                    <div id="container_demo">
                        <a class="hiddenanchor" id="toregister"></a>
                        <a class="hiddenanchor" id="tologin"></a>
                        <a class="hiddenanchor" id="toforgot"></a>
                        <div id="wrapper">
                            <div id="login" class="animate form">
                                <form action="Controle/controleLogin.php" autocomplete="on" method="post">
                                    <h3>
                                        <br>Sistema ThreadTional</h3>
                                    <p>
                                        <label style="margin-bottom:0px;" for="username" class="uname"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            Registro funcional
                                        </label>
                                        <input id="username" name="username" required type="text" placeholder="Registro funcional" />
                                    </p>
                                    <p>
                                        <label style="margin-bottom:0px;" for="password" class="youpasswd"> <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                            Senha
                                        </label>
                                        <input id="password" name="password" required type="password" placeholder="eg. X8df!90EO" />
                                    </p>

                                    <p class="login button">
                                        <input type="submit" value="Login" class="btn btn-success" />
                                    </p>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- global js -->
        <script src="View/elementos/js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="View/elementos/js/bootstrap.min.js" type="text/javascript"></script>
        <!--livicons-->
        <script src="View/elementos/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
        <script src="View/elementos/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
        <script src="View/elementos/js/josh.js" type="text/javascript"></script>
        <script src="View/elementos/js/metisMenu.js" type="text/javascript"></script>
        <script src="View/elementos/vendors/holder-master/holder.js" type="text/javascript"></script>
        <!-- end of global js -->
    </body>
</html>
