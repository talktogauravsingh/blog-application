<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | Blog Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="">
</head>
<body>

<!-- login form -->

<div style="height:100vh;" class="d-flex justify-content-center align-items-center">
  <div class="card" style="width: 20rem;">
    <div class="card-body">
      <h5 class="text-center text-uppercase">Login</h5>
      <hr class="m-auto">
      <form action="/processLogin" method="post">
        @csrf
        <input type="email" name="email" placeholder="Email" class="form-control mt-3" required>
        <input type="password" name="password" placeholder="Password" class="form-control mt-3 mb-1" required>
        <a class="mt-2" href="/signup">Create an Account</a>
        <button class="btn btn-dark btn-block mt-3">Login</button>
      </form>
    </div>
  </div>
</div>


<!-- /login form -->




   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> 
</body>
</html>