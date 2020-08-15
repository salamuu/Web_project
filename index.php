<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="main/css/style.css">
    <link rel="stylesheet" href="main/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Login Form</title>
 </head>
  <body class="bg-primary">
    <div class="conteiner py-5 text-center">
     <div class="card- tittle h1">Login to Web App</div>
     <form method="post" action="login.php">
         <p><input type="text" name="uname" value="" placeholder="Username" required=""></p>
         <p><input type="password" name="pword" value="" placeholder="Password" required=""></p>
        <pclass="remember_me">
        <label>
          <input type="checkbox" name="remember_me" id="remember_me">
          Remember me on this computer
        </label>
        </p>
        <p><input type="submit" name="commit" value="Login"></p>
     </form>
    </div>

    
    
  </body>
</html>
