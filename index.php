<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<!-- register -->
<div class="login-page">
  <div class="form" >
    <form class="register-form" method="post" action="register.php">
      <input type="text" placeholder="nama" name="nama" required="required"/>
      <input type="text" placeholder="alamat" name="alamat" required="required"/>
      <input type="text" placeholder="no telepon" name="no_telp" required="required"/>
      <input type="text" placeholder="username" name="username" required="required"/>
      <input type="password" placeholder="password" name="password" required="required"/>
      <button type="submit" name="register" value="daftar">create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>


    <!---login--->
    <form class="login-form" method="post" action="ceklogin.php">
      <input type="text" placeholder="username" name="username" required="required"/>
      <input type="password" placeholder="password" name="password" required="required"/>
      <button type="submit" name ="login" value="login">login</button>

      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./assets/js/script.js"></script>

</body>
</html>
