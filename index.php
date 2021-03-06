<?php @session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/assets/img/favicon.ico"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Home page</title>
</head>
<body class="bg-success">
  <header class="w-100 p-2 text-white">
    <img src="assets/img/Parach2.png" alt="company-logo" class="m-0 p-0 banner-img">
    <a href="https://parachictacademy.com.ng/" class="text-white weblink" target="_blank">Official Website</a>
    <p class="m-0 ml-2 p-0 font-weight-bold"><em>... real-time Inventory Management System</em></p>
  </header>
  <main class="login-form">
    <section class="form-box px-5 pt-5 pb-0">
      <p class="text-center login-head h5 mb-4">Admin Login</p>
      <form method="POST" action="controllers/LoginController.php">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>
          <?php if (isset($_SESSION['info'])) {
              echo "<p class='text-center text-danger'>".$_SESSION['info']."</p>";
              session_destroy();
          } ?>
          <button type="submit" class="btn btn-primary btn-block mt-4" name="login">Login</button>
        <div class="text-primary text-center">
          <span class="d-block">Available logins:</span>
          <span class="d-inline-block">SuperUser: [Username: admin, Password: password]</span>
          <span class="d-inline-block">Admin: [Username: teekaytech, Password: password]</span>
        </div>

      </form>
    <footer class="text-center mt-5 pb-2">
      <a href="https://taofeekolalere.me" target="_blank" class="footer-text">Copyright &copy; Teekaytech, 2020. </a>
    </footer>
    </section>
  </main>
</body>
</html>