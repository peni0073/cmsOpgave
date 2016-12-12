<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CMS - Tattoos</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <body>
    <!-- HEADER START -->
    <div class="container">
        <header class="row">
            <div class="col-xs-12 image">   
                <img src="img/header-img.jpg" alt="Tattoos header">            
            </div>
        </header>
    </div>
    <!-- HEADER SLUT -->

    <!-- NAVIGATION START -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <nav class="navbar navbar-default">
                  <div class="container-fluid">                   

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Forside <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Kontakt</a></li>                        
                      </ul>

                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Log ind</a></li>                        
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>
    <!-- NAVIGATION SLUT -->  
    
    <!-- MAIN START -->
    <div class="container">
        <main class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8">
                      
                      
                        <!-- FORMULAR til ARTICLES START -->
                        
                            <article class="col-md-12">
                                <form action="insert.php" method="get" class="form-horizontal">
                                    <div class="form-group">
                                        <label for="heading" class="control-label col-sm-4">
                                            Artiklens overskrift her:
                                        </label>
                                        <div class="col-sm-8">
                                            <input class="form-control" id="heading" type="text" name="heading" placeholder="Overskrift her...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="imgSrc" class="control-label col-sm-4">
                                            Billednavn:
                                        </label>
                                        <div class="col-sm-8">
                                            <input class="form-control" id="imgSrc" type="text" name="imgSrc" placeholder="Billednavn">
                                        </div>                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="imgAlt" class="control-label col-sm-4">
                                            Alt tekst til billede:
                                        </label>
                                        <div class="col-sm-8">
                                            <input class="form-control" id="imgAlt" type="text" name="imgAlt" placeholder="Alt tekst til billede">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="articleText" class="control-label col-sm-4">
                                            Artiklens tekst:
                                        </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="articleText" type="text" name="articleText" placeholder="Tekst her..." rows="5"></textarea>
                                        </div>
                                    </div>  
                                    <input type="submit" value="Indsæt artikel" class="btn btn-default btn-insert col-sm-2">          
                                </form>
                                
                            </article>
                        
                        <!-- FORMULAR til ARTICLES SLUT -->
                        
                        
                        <!-- ARTICLES START -->
                        
                        <?php include "fetchDb.php"; ?>
                        
                        <!-- ARTICLES SLUT -->
                    </div>
                    
                    <!-- LOGIN BOX START -->
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-6-offset-3 login-box">
                                <form action="checkUser.php" method="post" class="form-horizontal">
                                    <div class="form-group">
                                        <label for="user" class="col-sm-12">
                                            Brugernavn:
                                        </label>
                                        <div class="col-sm-12">
                                            <input class="form-control" id="user" type="text" name="formUsername" placeholder="Brugernavn">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="col-sm-12">
                                            Password:
                                        </label>
                                        <div class="col-sm-12">
                                            <input class="form-control" id="pass" type="password" name="formPassword" placeholder="Password">
                                        </div>                                        
                                    </div>                                    
                                    <input type="submit" value="Log ind" class="btn btn-default insert-btn col-sm-2">          
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- LOGIN BOX SLUT -->
                    
                </div>
            </div>
        </main>
    </div>
    <!-- MAIN SLUT -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      </body>
</html>


