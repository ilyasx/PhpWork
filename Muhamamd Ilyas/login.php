<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id="signupMenu">
            <form action="process.php" method="post" >
                        <div class="form-group">
                          <label for="exampleInputEmail1">Username</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Remember your password
                          </label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                        <a href="singup.php">Register here</a>
            </form>
        </div>
    </body>
</html>
