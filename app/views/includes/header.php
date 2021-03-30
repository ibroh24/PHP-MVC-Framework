<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITENAME; ?></title>
    <!-- Latest compiled and minified CSS -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<style>

body {
  margin: 0;
  padding: 0;
  /* background-color: #17a2b8; */
  height: 150vh;
}

.login-column{
  border:1px solid red;
  display:flex;
  justify-content:center;
  align-items:center;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 500px;
  height: 500px;
  border: 1px solid black;
  background-color: #EAEAEA;
}

.form-group{
  margin-bottom:2rem;
}



#login .container #login-row #login-column #login-box #login-form {
  padding: 30px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}


</style>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <img src="https://mypatricia.co/images/logo/logo-gray-200.svg" class="navbar-brand" href="<?php echo URLROOT; ?>/index"></img>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URLROOT; ?>/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/contact">Contact</a>
        </li>
      
      </ul>
      <li style="list-style:none">
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/logout" class="btn btn-primary">Logout</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-primary">Signup</a>
                <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-primary">Login</a>
            <?php endif; ?>
        </li>
    </div>
  </div>
</nav>

<div class="container">
