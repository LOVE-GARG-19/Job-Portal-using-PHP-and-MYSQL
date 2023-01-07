<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
  <style>
    .sidebar {
      margin: 0;
      margin-top: 3.8em;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
    }

    /* Sidebar links */
    .sidebar a {
      display: block;
      color: black;
      padding: 16px;
      text-decoration: none;
    }

    /* Active/current link */
    /* .sidebar a.active{
      background-color: #0000FF	;
      color: white;
    } */

    /* Links on mouse-over */
    .sidebar a:hover {
      background-color: #87CEFA;
      color: white;
    }

    /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
    div.content {
      margin-left: 200px;
      padding: 1px 16px;
      height: 1000px;
    }

    /* On screens that are less than 700px wide, make the sidebar into a topbar */
    @media screen and (max-width: 700px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }

      .sidebar a {
        float: left;
      }

      div.content {
        margin-left: 0;
      }
    }

    /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
    @media screen and (max-width: 400px) {
      .sidebar a {
        text-align: center;
        float: none;
      }
    }

    .m {
      margin-top: 4em;
    }

    .x {
      /* border: 1px solid black; */
      width: 100%;


    }

    .x div{
      background-color: #E6E6FA;
      

    }
  </style>
</head>

<body>
  
    <nav class=" x navbar navbar-expand-lg bg-body-tertiary" style="position: fixed;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#"></a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link disabled"></a>
          </div>
        </div>
      </div>
    </nav>
    <div class="sidebar">
      <a class="active" href="index.php">Jobs</a>
      <a href="jobs.php">Candidates applied</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
    </div>
    
    