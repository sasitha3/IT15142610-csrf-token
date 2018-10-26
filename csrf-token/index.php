<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="logo-black.png"/>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="login.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!------ Include the above in your HEAD tag ---------->
    </head>
    <title>CSRF Attack PREVENT</title>
    <body style="background-color:#222223;">
        <div class="container">
            <center style="color:#fff;">
            <h1>WELCOME TO CSRF ATTACK PREVENT TESTING WEBSITE </h1>
            <h2>Name : H.G.S.Premadasa </h2>
            <h2>Student ID : IT15142610 </h2>
            </center>
            <div class="card card-container">
                <?php 
                    //display Errors in webpage
                    if(isset($_GET['fail']) && $_GET['fail'] == 1){
                        echo "<h6 style='color:red' > Username or password is incorrect <br /> *check readme.md file </h6>";//username password error
                    } else if (isset($_GET['fail']) && $_GET['fail'] == 2) {
                        echo "<h6 style='color:red'>Invalid token </h6>";//token not found error
                    }
                ?>
                <h4>LOGIN</h4>
                <form class="form-signin" method="post" action="result.php">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="text" id="inputUsername" class="form-control" placeholder="Username" name="username" required>
                    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>              
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" >Sign in</button>
                </form>
                
            </div><!-- /card-container -->
        </div><!-- /container -->
    </body>
</html>