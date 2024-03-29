<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>
<!doctype html>
<html lang="en">
  <style>
    body{
  background-image: url("images/bg1.jpg");
  background-size: cover;
  }
  </style>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome - <?php $_SESSION['username']?></title>
  </head>
  <body>
  <?php require 'partials/_navhost.php' ?>
  <container>
    <?php require 'partials/_footer.php' ?>
  </container>

  <div>
    <center>
    <h1>Host Dashboard</h1>
    <br><br>
    <div class="row">
    <br><br>
    <div class="col-4">
    <button type="button" class="btn btn-primary btn-lg"
    onclick= "window.location.href = '/INSTMS/loginsystem/declare_tour.php'">Declare Tournament</button>
    </div>

    <div class="col-3">
    <button type="button" class="btn btn-primary btn-lg"
    onclick= "window.location.href = '/INSTMS/loginsystem/reg_teams.php'">Validate Teams Registered for Tournament</button>
    </div>

    <div class="col-4">
    <button type="button" class="btn btn-primary btn-lg"
    onclick= "window.location.href = '/INSTMS/loginsystem/accomodate.php'">Food & Accomodation Management</button>
    </div>
    </div>

    <div>


    <br><br>
    <div class="row">
    <div class="col-4">
    <button type="button" class="btn btn-primary btn-lg"
    onclick= "window.location.href = '/INSTMS/loginsystem/up_result.php'">Upload Results</button>
    </div>

    <div class="col-3">
    <button type="button" class="btn btn-primary btn-lg"
    onclick= "window.location.href = '/INSTMS/loginsystem/show_accom.php'">Food & Accomodation Allotment</button>
    </div>

    <div class="col-4">
    <button type="button" class="btn btn-primary btn-lg"
    onclick= "window.location.href = '/INSTMS/loginsystem/add_fixture.php'">Upload Fixture</button>
    </div>

    <div class="pad"></div>
    </div>
  </div>

  <br><br>
  <div class="row">
  <div class="col-3">
    <button type="button" class="btn btn-primary btn-lg"
    onclick= "window.location.href = '/INSTMS/loginsystem/show_result.php'">View Results</button>
    </div>
    
    <div class="col-3">
    <button type="button" class="btn btn-primary btn-lg" onclick= "window.location.href = '/INSTMS/loginsystem/view_tournaments.php'">View Tournaments </button>   
    </div>

    <div class="col-2">
    <button type="button" class="btn btn-primary btn-lg" onclick= "window.location.href = '/INSTMS/loginsystem/show_fixture.php'">View Match Fixtures </button>   </div>
    <div class="col-3">
    <button type="button" class="btn btn-primary btn-lg" onclick= "window.location.href = '/INSTMS/loginsystem/add_certificate.php'">Upload Certificates </button>   </div>
    </div>
    </div>
  </div>
  <br><br>
 
    
  </div>
  
  
  
  
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
