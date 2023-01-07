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
      background-image: url(asset/bg2.jpg);
      background-size: cover;



    }

    .tco {
      color: white;
    }

    .bgl {
      background: -webkit-linear-gradient(left, #055a4f, #00c6ff);
      color: white;
      border-radius: 2em;

    }

    /* .container{
          background-image: url(asset/4893706.jpg);

        } */
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
    .container h1{
      text-align: center;
    }
  </style>
  <title>Registration</title>
</head>

<body>

  <div class="container">
    
    <form method="POST" class="bgl">
    <h1>Registration</h1>
      <div class="mb-3">
        <label for="exampleInputName" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="exampleInputName" name="name">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text tco">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputNumber" class="form-label">Phone Number</label>
        <input type="number" class="form-control" id="exampleInputNumber" name="phone_no">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Comfirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      <br>
      <P>Already register? <a href="Login.php">Login</a></P>
    </form>
  </div>
</body>

</html>