<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    body {
      background-image: url(login1.jpg);
      background-size: cover;
      
    }

    .tc {
      text-align: center;
    }

    form {

      margin-top: 6em;
      margin-left: 20em;
      margin-right: 20em;
      padding: 30px;
      border: 1px solid black;
      background-color: white;

    }

    .container {
      align-self: center;
      
    }
    .bgl{
      /* background-image: linear-gradient(to bottom right, #0000FF, #20B2AA); */
      /* background-image: linear-gradient(to right, #FF1493 , #0000FF); */
      background-image: url(login1.jpg);
      background-size: cover;
         opacity: 1.6;
         border-radius: 1.2em;
         color: white;
         box-shadow: 11px 10px  8px #FF00FF;

      }
      .logo{
        text-align: center;
        margin-top: 1em;
        margin-bottom: 1em;
        
      }

    .mg {
      margin-left: 16em;
    }
    
  </style>
  <title>Login</title>
</head>

<body>

  <div class="container">
  
    <form method="POST" class="bgl">
    <div class="logo">
      <h3>LOGIN</h3>
    </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div style="color: black;" id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <button type="submit" class=" mg btn btn-primary" name="Login">Submit</button>
      <br>
      <p class="tc">NEW USER?</p>
      <P class="tc">Create Account<a href="Register.php"> Sign up</a></P>
    </form>
  </div>
</body>

</html>