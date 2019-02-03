<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
        <title>Login page</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

          body
    {
    background-image:url("t12.jpg");
    background-repeat:no-repeat;
    background-size: cover;
      }
</style>



        </head>
      
<body >
         
<center>
 <form method="post" action="login.php">
    <?php include('errors.php'); ?>

        <div class="container"  style="margin-top: 25px;">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h3> STUDENT   LOGIN</h4>
                        </div>
   
                        <div class="panel-body">
                    

                                                        <div class="form-group"><br>
                                                      
                                    <i style='font-size:24px' class='fas fa address-book'></i>
                                   
                                    <input type="Varchar" class="form-control" placeholder="Username" name="username" required = "true" maxlength="10"  autofocus> <br>
                                </div>
                                <div class="form-group">
                                   
                                    <input name="password"  type="Password" class="form-control" placeholder="Password" required = "true" autofocus>
                                </div><br>
                                 
                                
                                
                                  
                                    <a href="index.php">
                                <button type="submit" name="login_user" class="btn btn-primary">Login</button><br><br>
                                </a>

                                
                                <br>
                                <br>


                               <B> If not registered ?<B>
                                <a href="register.php">SIGN UP </a>

                            </form><br/>
                        </div>
                        <div class="panel-footer">
                    </div>
                </div>
            </div>
        </div>
        </center>
</body>
        <footer> 
</center>
</div>
</footer>
       

       </html>