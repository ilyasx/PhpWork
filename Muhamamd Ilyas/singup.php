<html>
    <head>
        <title>Singup page</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id="signupMenu">
            <form action="process.php" method="post" >
                    <div class="form-group">
                      <label for="exampleInputFirstname">First Name</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="First Name" name="firstName">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputLastname">Last Name</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name" name="lastName">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                    <!---
                    <div class="form-group">
                      <label for="exampleInputFile">Image Here</label>
                      <input type="file" id="exampleInputFile">
                     <p class="help-block">Example block-level help text here.</p>
                    </div>--->
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember your password
                      </label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
            </form>
            
        </div>
        
    </body>
   
    
    
</html>