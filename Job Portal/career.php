<?php include 'config.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <style>
    .container {
      width: 100%;
      background-image: url(backg2.jpg);
      text-align: center;
      color: #00BFFF;
      padding: 1em;
      border-radius: 2em;
    }

    .bgi {
      background-image: url(backg2.jpg);
      background-repeat: no-repeat;
      background-size: 100%;
      height: 300px;
      display: flex;
      align-items: center;
    }

    .flex-box {
      background-color: #28292d;

      padding: 2em;
      width: 100%;
      margin-top: 2em;
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-items: center;
      justify-content: center;

    }

    .flex-box div {
      border: 1px solid black;
      padding: 1.5em;
      width: 30%;
      box-shadow: 5px 10px 18px #48D1CC;
      background-color:#28292d;
      margin-bottom: 1em;
      color: white;
    }

    .card {
      display: flex;
      flex-direction: column;
      margin-left: 2em;
    }

    .card h4,
    h1 {

      text-align: center;

    }
    .btn{
background-color: #48D1CC;
    }
  </style>
  <title>Carrer</title>
</head>

<body>
  <div class="bgi">
    <div class="container">
      <h4>JOB PORTAL</h4>
    </div>
  </div>


  <div class="flex-box">
    <?php
    $sql = "SELECT  cname,position, jdesc,skills,CTC FROM jobs";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
      while ($rows = $result->fetch_assoc()) {
        echo "
        <div class='card'>
        <h1 style=>$rows[position]</h1>
      <h4>$rows[cname]</h4>
      <p>$rows[jdesc]</p>
      <p> <B> Skills Required:</B>$rows[skills]</p>
      <P><B> CTC:</B>$rows[CTC]</P>
      <button class='btn btn-primary' type='button' data-bs-toggle='modal' data-bs-target='#exampleModal' aria-expanded='false' aria-controls='collapseExample'>
      Apply Now
       </button>
      </div>";
      }
    }
    ?>
    
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">APPLY FOR JOB</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input type="text" class="form-control" name="applyed" >
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year Passout</label>
            <input type="text" class="form-control" name="year">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="apply" class="btn btn-primary">Apply</button>
        </form>
      </div>
      </div>
      
    </div>
  </div>

  
    
  
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>