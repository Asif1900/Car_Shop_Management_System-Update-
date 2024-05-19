<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Luxury Motors</title>
  <!-- Favicon -->
  <!-- Custom styles -->
  <link rel="stylesheet" href="./css/style.min.css">
</head>

<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Luxury Motors</h1>
    <p class="sign-up__subtitle">Sign in to your account to continue</p>
    <form class="sign-up-form form" method="post" action="../Controllers/logCheckController.php">
      <label class="form-label-wrapper" >
        <p class="form-label">Email/ID</p>
        <input class="form-input" type="text" placeholder="Enter your ID" required name="id">
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Password</p>
        <input class="form-input" type="password" placeholder="Enter your password" required name="pass">
      </label>
      
      <button class="form-btn primary-default-btn transparent-btn">Sign in</button>
    </form>
  </article>
</main>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.bootstrap.js"></script>
</body>

</html>