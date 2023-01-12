<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Login</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="<?php echo base_url('../assets/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('../assets/signin.css') ?>" rel="stylesheet">
  </head>
  <body class="text-center"> 
  <?php

    if($this->session->flashdata('error')){
      echo $this->session->flashdata('error');
    }

  ?>
    <main class="form-signin m-auto">
      <form method="post" action="<?= base_url('homepage/process') ?>">
        <div class="form-floating" style="margin:200px 500px 0px;">
          <input type="text" class="form-control" id="username" name="username" autocomplete="off" required>
          <label for="username">Username</label>
        </div>
        <div class="form-floating" style="margin:20px 500px;">
          <input type="password" class="form-control" id="password" name="password" autocomplete="off" required>
          <label for="password">Kata sandi</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" name="login" type="submit" style="width:360px !important">Masuk</button>
        <p class="mt-5 mb-3 text-muted">Halaman login</p>
     </form>
  </main>
  </body>
</html>